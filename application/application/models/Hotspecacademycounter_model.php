<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspecacademycounter_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'hotspecacademycounter', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'hotspecacademycounter');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'title'	=>	$post['title'],									   								  
									   'number'	=>	$post['number'],
									   'type'	=>	$post['type'],
									   'status'	=>	$post['status']
									 );
								 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'hotspecacademycounter', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'hotspecacademycounter', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}