<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Testimonial_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Testimonial';
		$data['contents']			=	'admin/testimonial/testimonial_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['testimonials']		=	$this->Testimonial_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Testimonial';
		$data['contents']			=	'admin/testimonial/add_edit_testimonial';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['testimonial']			=	$this->Testimonial_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Testimonial_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'testimonial');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'testimonial/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'testimonial');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'testimonial');
			
	}
	
	
	
	
}
