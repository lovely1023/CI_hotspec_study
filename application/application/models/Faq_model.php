<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'faq', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'faq');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'title'	=>	$post['title'],
									   'description'	=>	$post['description'],
									   'status'	=>	$post['status']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'faq', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'faq', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}