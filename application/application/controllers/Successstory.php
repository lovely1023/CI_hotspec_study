<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Successstory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "common");
		$this->load->model("Successstories_model", "successstory");
		$this->load->library('email');
	}
	public function index()
	{
		
		$data['page_title']			=	    "successstory";
		$data['contents']			=		'success-stories';		
		$data['banners']			=	$this->common->get_banners('success-stories');	
		$data['page']			=	$this->common->get_page('success-stories');		
		$data['successstories']			=	$this->successstory->get_successstories($_REQUEST);
	
		$this->load->view("template", $data);
	}
	
	
	
	function detail($id)
	{
		
		$data['page_title']			=	    "successstory";
		$data['contents']			=		'success-stories-detail';		
		$data['banners']			=	$this->common->get_banners('success-stories');		
		$data['successstory']			=	$this->successstory->get_rows($id);
		$data['page']			=	$this->common->get_page('success-stories');	
	    $data['successstories']			=	$this->successstory->get_successstories();
	
		$this->load->view("template", $data);
	}
	
	
		
		
	
}
