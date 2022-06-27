<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Targetgroup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Targetgroup_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Targetgroup';
		$data['contents']			=	'admin/targetgroup/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['targetgroups']		=	$this->Targetgroup_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Targetgroup';
		$data['contents']			=	'admin/targetgroup/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['targetgroup']			=	$this->Targetgroup_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Targetgroup_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'targetgroup');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'targetgroup/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'targetgroup');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'targetgroup');
			
	}
	
	
	
	
}
