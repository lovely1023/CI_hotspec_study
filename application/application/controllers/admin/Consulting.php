<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Consulting_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Consulting';
		$data['contents']			=	'admin/consultingpage/consultingpage';
		$data['message']			=	$this->session->flashdata('message');
		$data['consultingpages']		=	$this->Consulting_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Consulting';
		$data['contents']			=	'admin/consultingpage/add_edit_consultingpage';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['consultingpage']			=	$this->Consulting_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Consulting_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'consulting');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'consulting/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'consultingpage');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'consulting');
			
	}
	
	
	
	
}
