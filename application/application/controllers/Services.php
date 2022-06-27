<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "common");
		$this->load->model("Hotspecconsulting_model", "services");
		$this->load->library('email');
	}
	public function index()
	{
		
		$data['page_title']			=	    "services";
		$data['contents']			=		'services';		
		$data['banners']			=	$this->common->get_banners('services');	
		$data['page']			=	$this->common->get_page('services');		
		$data['services']			=	$this->services->get_subservices($_REQUEST);
	
		$this->load->view("template", $data);
	}
	
	
	
	function detail($id)
	{
		
		$data['page_title']			=	    "services";
		$data['contents']			=		'services-detail';	
        $data['service']			=	$this->services->get_service($id);	
      
		$data['banners']			=	$this->common->get_banners($data['service']->url);	
 	
	    $data['services']			=	$this->services->get_services();
		$data['testimonials']		=	$this->common->getTestimonials();
		$data['subservices']			=	$this->services->get_sub_services($data['service']->id);
		$this->load->view("template", $data);
	}
	
	
		
		
	
}
