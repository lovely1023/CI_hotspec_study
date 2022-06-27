<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Career_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'career', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'career');
			return $sql->result();
		}
	}	
	public function save_row($post)
	{
		 $values			=	array(
									   'title'	=>	$post['title'],
									   'work_location'	=>	$post['work_location'],
									   'work_type'	=>	$post['work_type'],
									   'short_description'	=>	$post['short_description'],
									   'description'	=>	$post['description'],
									   'status'	=>	$post['status']
									 );								 
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'career', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'career', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}