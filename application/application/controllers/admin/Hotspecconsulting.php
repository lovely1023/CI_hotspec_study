<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspecconsulting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hotspecconsulting_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Hotspecconsulting';
		$data['contents']			=	'admin/hotspecconsulting/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['hotspecconsultings']		=	$this->Hotspecconsulting_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Hotspecconsulting';
		$data['contents']			=	'admin/hotspecconsulting/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['hotspecconsulting']			=	$this->Hotspecconsulting_model->get_rows($id);
		$data['hotspecconsultings']		=	$this->Hotspecconsulting_model->get_rows();
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Hotspecconsulting_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'hotspecconsulting');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'hotspecconsulting/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'hotspec_consulting');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'hotspecconsulting');
			
	}
	
	
	
	
}
