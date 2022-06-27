<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model("Common_model", "common");
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
		
		$data['page_title']      	=	'Dashboard';
		$data['contents']			=	'admin/dashboard';
		
		$this->load->view('admin/admin_template', $data);
		
	}
	
	public function manage_banner()
	{
		
		$data['page_title']      	=	'Manage Banner';
		$data['contents']			=	'admin/manage_banners';
		$data['message']			=	$this->session->flashdata('message');
		$data['banner_details']		=	$this->Admin_model->get_banners();
		$this->load->view('admin/admin_template', $data);	
		
	}
	
	public function add_edit_banner($bnr_id=null)
	{
		$data['page_title']      	=	'Manage Banner';
		$data['contents']			=	'admin/add_edit_banner';
		$data['message']			=	$this->session->flashdata('message');
		$data['bnr_id']				=	$bnr_id;
		$banners					=	'';
		if(!empty($bnr_id))
		{
			$banners				=	$this->Admin_model->get_banners($bnr_id);
		}
		$data['banners']			=	$banners;
		$data['pages']			=	$this->Admin_model->get_pages();
		
		$this->load->view('admin/admin_template', $data);
	}
	public function save_banner()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Admin_model->save_banner_details($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'dashboard/manage_banner');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'dashboard/add_edit_banner');
		}
	
	}
	
	public function delete_banner($bnr_id=null)
	{

	
		$this->db->where('id', $bnr_id);		
		$this->db->delete($this->prefix.'banner');
		
		$this->db->where('banner_id', $bnr_id);		
		$this->db->delete($this->prefix.'banner_item');
		
		$this->session->set_flashdata('message', 'dsuccess');
			redirect(ADMIN_URL.'dashboard/manage_banner');
			
	}
	
	public function manage_banner_item($bnr_id)
	{
		$data['page_title']      	=	'Manage Banner';
		$data['contents']			=	'admin/manage_banners_item';
		$data['message']			=	$this->session->flashdata('message');
		$data['bnr_id']				=	$bnr_id;
		$data['banner_details']		=	$this->Admin_model->get_banners_item_list($bnr_id);
		$this->load->view('admin/admin_template', $data);	
		
	}
	
	public function add_edit_banner_item($bnr_id,$bnr_item_id=null)
	{
		$data['page_title']      	=	'Manage Banner';
		$data['contents']			=	'admin/add_edit_banner_item';
		$data['message']			=	$this->session->flashdata('message');
		$data['bnr_id']				=	$bnr_id;
		$data['bnr_item_id']				=	$bnr_item_id;
		$banners					=	'';
		if(!empty($bnr_item_id))
		{
			$banners				=	$this->Admin_model->get_banners_item($bnr_item_id);
		}
		$data['banners']			=	$banners;
		$this->load->view('admin/admin_template', $data);
	}
	public function save_banner_item($bnr_id)
	{
		$post         =   $this->input->post();
	    $insertedId   =   $this->Admin_model->save_banner_item_details($bnr_id,$post);
		if(isset($_FILES))
		{
			if($_FILES['bnrFile']['error']==0)
			{
				$path		  	=	$_FILES['bnrFile']['name']	;
				$fileName     	=   time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH;
				$config['allowed_types'] = '*';
				$config['file_name'] = $fileName; 

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('bnrFile')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $this->db->where('id', $insertedId);	
				  $this->db->update($this->db->dbprefix."banner_item", array('image'=>$fileName));
				}
			}
		}
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'dashboard/manage_banner_item/'.$bnr_id);
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'dashboard/add_edit_banner_item/'.$bnr_id);
		}
	
	}
	
	public function delete_banner_item($bnr_id,$bnr_item_id)
	{

	
		$this->db->where('id', $bnr_item_id);
		
		$this->db->delete($this->prefix.'banner_item');
		
		$this->session->set_flashdata('message', 'dsuccess');
			redirect(ADMIN_URL.'dashboard/manage_banner_item/'.$bnr_id);
			
	}	
	
	  public function manage_homepage()
	{
		
		$data['page_title']      	=	'Manage Banner';
		$data['contents']			=	'admin/homepage/manage_homepage';
		$data['message']			=	$this->session->flashdata('message');
		$data['homepages']		=	$this->Admin_model->get_homepage_rows();
		$this->load->view('admin/admin_template', $data);	
		
	}
	
	public function add_edit_homepage($id=null)
	{
		$data['page_title']      	=	'Manage Banner';
		$data['contents']			=	'admin/homepage/add_edit_homepage';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['homepage']			=	$this->Admin_model->get_homepage_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save_homepage()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Admin_model->save_homepage_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'dashboard/manage_homepage');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'dashboard/add_edit_homepage');
		}
	
	}
	
	public function delete_homepage($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'homepage');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'dashboard/manage_homepage');
			
	}
   public function profile()
	{
		$data['page_title']      	=	'profile';
		$data['contents']			=	'admin/profile';
		
		$data['profile_detail']     =   $this->Admin_model->get_profile_detail();
		
		
		$this->load->view('admin/admin_template', $data);
	}
	
	public function save_profile()
	{
		$post     =   $this->input->post();
		$result   =   $this->Admin_model->save_profile_details($post);
		if($result)
		{
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'dashboard/profile');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'dashboard/profile');
		}
	
	}
	
	
	
	public function manage_testimonial()
	{
		$data['page_title']      	=	'Manage Testimonial';
		$data['contents']			=	'admin/manage_testimonial';
		$data['testimonial_details']		=	$this->Admin_model->get_testimonial();
		$data['message']			=	$this->session->flashdata('message');
		$this->load->view('admin/admin_template', $data);
	}
	
	public function add_edit_testimonial($id=null)
	{
		$data['page_title']      	=	'Manage testimonial';
		$data['contents']			=	'admin/add_edit_testimonial';
		$data['message']			=	$this->session->flashdata('message');
		$data['testimonial_id']			=	$id;
		$city_name				    =	'';
		if(!empty($id))
		{
			$data['testimonial']		=	$this->Admin_model->get_testimonial($id);
		}
		
		$this->load->view('admin/admin_template', $data);
	}
	
	public function save_testimonial()
	{
		$post     =   $this->input->post();
		$result   =   $this->Admin_model->save_testimonial_details($post);
		if($result)
		{
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'dashboard/manage_testimonial');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'dashboard/add_edit_testimonial');
		}
	
	}
	
	public function delete_testimonial($id=null)
	{

	$post     =   $this->input->post();
	
	$id=$post['id'];
		$this->db->where('id', $id);
		
		$this->db->delete($this->prefix.'testimonial');
		
		
			
	}
	
	
}
