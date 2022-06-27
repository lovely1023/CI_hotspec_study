<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage Blog';
		$data['contents']			=	'admin/blog/blog_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['blogs']		=	$this->Blog_model->get_blog();
		$this->load->view('admin/admin_template', $data);			
	}
	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage Blog';
		$data['contents']			=	'admin/blog/add_edit_blog';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['blog']			=	$this->Blog_model->get_blog($id);
		$data['categories']		=	$this->Blog_model->get_category();		
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		 $post         =   $this->input->post();
	     $insertedId   =   $this->Blog_model->save_blog($post);		
		if($insertedId)
		{			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'blog');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'blog/add_edit');
		}
	
	}
	
	public function delete($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'blog');	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'blog');
			
	}
	
	public function category()
	{				
		$data['page_title']      	=	'Manage Blog Category';
		$data['contents']			=	'admin/blog/blog_cat_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['blog_cats']		=	$this->Blog_model->get_blog_cat();
		$this->load->view('admin/admin_template', $data);		
	}
	
	public function add_edit_cat($id=null)
	{
		$data['page_title']      	=	'Manage Blog';
		$data['contents']			=	'admin/blog/add_edit_blog_cat';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['cat']			=	$this->Blog_model->get_blog_cat($id);		
		$this->load->view('admin/admin_template', $data);
	}
	public function save_cat()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->Blog_model->save_blog_cat($post);
		
		if($insertedId)
		{		
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'blog/category');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'blog/add_edit_cat');
		}
	
	}
	
	public function delete_cat($id)
	{	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'blog_category');		
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'blog/category');
			
	}	
}
