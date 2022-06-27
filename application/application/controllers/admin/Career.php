<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Career_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{				
		$data['page_title']      	=	'Manage Career';
		$data['contents']			=	'admin/career/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['careers']		=	$this->Career_model->get_rows();
		$this->load->view('admin/admin_template', $data);		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Career';
		$data['contents']			=	'admin/career/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['career']			=	$this->Career_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	    $insertedId   =   $this->Career_model->save_row($post);		
		if($insertedId)
		{			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'career');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'career/add_edit');
		}	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'career');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'career');			
	}	
}