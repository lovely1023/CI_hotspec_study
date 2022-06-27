<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Faq_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Faq';
		$data['contents']			=	'admin/faq/faq_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['faqs']		=	$this->Faq_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Faq';
		$data['contents']			=	'admin/faq/add_edit_faq';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['faq']			=	$this->Faq_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Faq_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'faq');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'faq/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'faq');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'faq');
			
	}
	
	
	
	
}
