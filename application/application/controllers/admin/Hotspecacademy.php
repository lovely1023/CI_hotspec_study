<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspecacademy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hotspecacademy_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Hotspecacademy';
		$data['contents']			=	'admin/hotspecacademy/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['hotspecacademys']		=	$this->Hotspecacademy_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Hotspecacademy';
		$data['contents']			=	'admin/hotspecacademy/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['hotspecacademy']			=	$this->Hotspecacademy_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Hotspecacademy_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'hotspecacademy');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'hotspecacademy/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'hotspecacademy');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'hotspecacademy');
			
	}
	
	
	
	
}
