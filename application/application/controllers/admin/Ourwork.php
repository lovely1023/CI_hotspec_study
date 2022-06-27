<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourwork extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ourwork_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Ourwork';
		$data['contents']			=	'admin/ourwork/ourwork_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['ourworks']		=	$this->Ourwork_model->get_ourwork();
		
		$this->load->view('admin/admin_template', $data);			
	}
	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Ourwork';
		$data['contents']			=	'admin/ourwork/add_edit_ourwork';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['ourwork']			=	$this->Ourwork_model->get_ourwork($id);
		$data['categories']		=	$this->Ourwork_model->get_category();		
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		 $post         =   $this->input->post();
	     $insertedId   =   $this->Ourwork_model->save_ourwork($post);		
		if($insertedId)
		{			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'ourwork');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'ourwork/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'ourwork');	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'ourwork');
			
	}
	
	public function category()
	{				
		$data['page_title']      	=	'Manage Ourwork Category';
		$data['contents']			=	'admin/ourwork/ourwork_cat_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['ourwork_cats']		=	$this->Ourwork_model->get_ourwork_cat();
		$this->load->view('admin/admin_template', $data);		
	}
	
	public function add_edit_cat($id=null)
	{
		$data['page_title']      	=	'Manage Ourwork';
		$data['contents']			=	'admin/ourwork/add_edit_ourwork_cat';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['cat']			=	$this->Ourwork_model->get_ourwork_cat($id);		
		$this->load->view('admin/admin_template', $data);
	}
	public function save_cat()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Ourwork_model->save_ourwork_cat($post);
		
		if($insertedId)
		{		
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'ourwork/category');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'ourwork/add_edit_cat');
		}
	
	}
	
	public function delete_cat($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'ourwork_category');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'ourwork/category');
			
	}	
}
