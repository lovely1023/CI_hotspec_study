<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careerprospects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Careerprospects_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Careerprospects';
		$data['contents']			=	'admin/careerprospects/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['careerprospectss']		=	$this->Careerprospects_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Careerprospects';
		$data['contents']			=	'admin/careerprospects/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['careerprospects']			=	$this->Careerprospects_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Careerprospects_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'careerprospects');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'careerprospects/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'careerprospects');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'careerprospects');
			
	}
	
	
	
	
}
