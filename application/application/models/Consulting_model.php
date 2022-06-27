<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Consulting_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'consultingpage', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'consultingpage');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'row_no'	=>	$post['row_no'],
									   'row_name'	=>	$post['row_name'],
									   'row_type'	=>	$post['row_type'],
									   'row_content'	=>	$post['row_content'],
									   'status'	=>	$post['status']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'consultingpage', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'consultingpage', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}