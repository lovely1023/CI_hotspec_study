<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspecacademycounter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hotspecacademycounter_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Hotspecacademycounter';
		$data['contents']			=	'admin/hotspecacademycounter/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['hotspecacademycounters']		=	$this->Hotspecacademycounter_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Hotspecacademycounter';
		$data['contents']			=	'admin/hotspecacademycounter/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['hotspecacademycounter']			=	$this->Hotspecacademycounter_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Hotspecacademycounter_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'hotspecacademycounter');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'hotspecacademycounter/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'hotspecacademycounter');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'hotspecacademycounter');
			
	}
	
	
	
	
}
