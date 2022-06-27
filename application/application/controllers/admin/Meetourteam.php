<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meetourteam extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meetourteam_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Meetourteam';
		$data['contents']			=	'admin/meetourteam/list';
		$data['message']			=	$this->session->flashdata('message');
		$data['meetourteams']		=	$this->Meetourteam_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Meetourteam';
		$data['contents']			=	'admin/meetourteam/add_edit';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['meetourteam']			=	$this->Meetourteam_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Meetourteam_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'meetourteam');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'meetourteam/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'meetourteam');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'meetourteam');
			
	}
	
	
	
	
}
