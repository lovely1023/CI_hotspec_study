<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Academy_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Academy';
		$data['contents']			=	'admin/academypage/academypage';
		$data['message']			=	$this->session->flashdata('message');
		$data['academypages']		=	$this->Academy_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Academy';
		$data['contents']			=	'admin/academypage/add_edit_academypage';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['academypage']			=	$this->Academy_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Academy_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'academy');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'academy/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'academypage');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'academy');
			
	}
	
	
	
	
}
