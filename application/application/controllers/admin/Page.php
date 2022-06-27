<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Page_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Page';
		$data['contents']			=	'admin/page/page_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['pages']		=	$this->Page_model->get_pages();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Page';
		$data['contents']			=	'admin/page/add_edit_page';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['page']			=	$this->Page_model->get_pages($id);		
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Page_model->save_page($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'page');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'page/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'page');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'page');
			
	}
	
	
	
	
}
