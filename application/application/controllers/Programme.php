<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programme extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "common");
		$this->load->model("Programme_model", "programme");
		$this->load->library('email');
	}
	public function index()
	{
		
		$data['page_title']			=	    "programme";
		$data['contents']			=		'programme';		
		$data['banners']			=	$this->common->get_banners('programme');	
		$data['page']			=	$this->common->get_page('programme');		
		$data['programes']			=	$this->programme->get_programs($_REQUEST);
	
		$this->load->view("template", $data);
	}
	
	
	
	function detail($id)
	{
		
		$data['page_title']			=	    "programme";
		$data['contents']			=		'programme-detail';		
		$data['banners']			=	$this->common->get_banners('programme');		
		$data['programme']			=	$this->programme->get_rows($id);
	    $data['programes']			=	$this->programme->get_programs($_REQUEST);
		$data['testimonials']		=	$this->common->getSuccessstory();
		$this->load->view("template", $data);
	}
	
	
		
		
	
}
