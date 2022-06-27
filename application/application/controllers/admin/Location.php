<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Location_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Location';
		$data['contents']			=	'admin/location/location_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['locations']		=	$this->Location_model->get_rows();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Location';
		$data['contents']			=	'admin/location/add_edit_location';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['location']			=	$this->Location_model->get_rows($id);
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Location_model->save_row($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'location');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'location/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'location');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'location');
			
	}
	
	
	
	
}
