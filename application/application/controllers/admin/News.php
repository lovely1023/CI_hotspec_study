<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model');
		
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin');
		}
	}
	public function index()
	{
				
		$data['page_title']      	=	'Manage News';
		$data['contents']			=	'admin/news/news_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['newss']		=	$this->News_model->get_news();
		$this->load->view('admin/admin_template', $data);	
		
		
	}

	
	public function add_edit($id=null)
	{
		$data['page_title']      	=	'Manage News';
		$data['contents']			=	'admin/news/add_edit_news';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['news']			=	$this->News_model->get_news($id);
		$data['categories']		=	$this->News_model->get_category();		
		$this->load->view('admin/admin_template', $data);
	}
	public function save()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->News_model->save_news($post);
		
		if($insertedId)
		{
			
			
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'news');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'news/add_edit');
		}
	
	}
	
	public function delete($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'news');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'news');
			
	}
	
	public function category()
	{				
		$data['page_title']      	=	'Manage News Category';
		$data['contents']			=	'admin/news/news_cat_list';
		$data['message']			=	$this->session->flashdata('message');
		$data['news_cats']		=	$this->News_model->get_news_cat();
		$this->load->view('admin/admin_template', $data);		
	}
	
	public function add_edit_cat($id=null)
	{
		$data['page_title']      	=	'Manage News';
		$data['contents']			=	'admin/news/add_edit_news_cat';
		$data['message']			=	$this->session->flashdata('message');
		$data['id']				=	$id;		
		$data['cat']			=	$this->News_model->get_news_cat($id);		
		$this->load->view('admin/admin_template', $data);
	}
	public function save_cat()
	{
		$post         =   $this->input->post();
	     $insertedId   =   $this->News_model->save_news_cat($post);
		
		if($insertedId)
		{		
			$this->session->set_flashdata('message', 'success');
			redirect(ADMIN_URL.'news/category');
		}
		else
		{
			$this->session->set_flashdata('message', 'fail');
			redirect(ADMIN_URL.'news/add_edit_cat');
		}
	
	}
	
	public function delete_cat($id)
	{

	
		$this->db->where('id', $id);		
		$this->db->delete($this->prefix.'news_category');	
	
		$this->session->set_flashdata('message', 'dsuccess');
		redirect(ADMIN_URL.'news/category');
			
	}
	
	
	
}
