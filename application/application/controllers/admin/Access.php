<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Access_model');
	}
	public function index()
	{
		$data['page_title']			=	'Login';
		$data['contents']			=	'admin/login';
		if($this->session->userdata('user_id'))
		{
			redirect('admin/dashboard');
		}
		$this->load->view('admin/login_template', $data);
	}
	
	public function login()
	{
			$resp = array();
			$post		=	$this->input->post();
			$login_status = 'invalid';
            
			$result    =  $this->Access_model->check_user($post);
			
			if($result)
			{
				$this->session->set_userdata($result);
				$login_status = 'success';
			}

			$resp['login_status'] = $login_status;


			// Login Success URL
			if($login_status == 'success')
			{
				redirect('admin/dashboard');
				//$resp['redirect_url'] = 'admin/dashboard';
			}else
			{
				$this->session->set_flashdata('message', 'Invalid username/password');
			
			    redirect('admin');	
			}


			//echo json_encode($resp);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
