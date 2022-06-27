<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Successstories extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Successstories_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Successstories';
		$data['contents']			=	'admin/successstories/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['successstoriess']		=	$this->Successstories_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Successstories';
		$data['contents']			=	'admin/successstories/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['successstories']			=	$this->Successstories_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Successstories_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'successstories');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'successstories/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'success_stories');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'successstories');
			
	}
	
	
	
	
}
