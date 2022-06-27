<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'location', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'location');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'country_name'	=>	$post['country_name'],
									   'address'	=>	$post['address'],
									   'hr_phone'	=>	$post['hr_phone'],
									   'sales_phone'	=>	$post['sales_phone'],
									   'email'	=>	$post['email'],
									   'opening_time'	=>	$post['opening_time'],
									   'google_map'	=>	$post['google_map'],
									   
									   'status'	=>	$post['status']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'location', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'location', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}