<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Setting_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Setting';
		$data['contents']			=	'admin/setting/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	1;		
		$data['setting']			=	$this->Setting_model->get_rows(1);
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Setting';
		$data['contents']			=	'admin/setting/add_edit_setting';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['setting']			=	$this->Setting_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Setting_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'setting');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'setting');
		}
	
	}
	
	
}
