<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skillscovered extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Skillscovered_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Skillscovered';
		$data['contents']			=	'admin/skillscovered/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['skillscovereds']		=	$this->Skillscovered_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Skillscovered';
		$data['contents']			=	'admin/skillscovered/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['skillscovered']			=	$this->Skillscovered_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Skillscovered_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'skillscovered');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'skillscovered/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'skillscovered');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'skillscovered');
			
	}
	
	
	
	
}
