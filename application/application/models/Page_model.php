<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_pages($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'page', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'page');
			return $sql->result();
		}
	}
	
	
	
	public function save_page($post)
	{
		
		if($post['pagetype']=='multirow')
		{
			
	      $values			=	array(
								   'title'	=>	$post['title'],
								   'url_key'	=>	$post['url_key'],
								   'pagetype'	=>	$post['pagetype'],
								   'row_description1'	=>	$post['row_description1'],
								   'row_description2'	=>	$post['row_description2'],
								   'row_description3'	=>	$post['row_description3'],
								   'row_description4'	=>	$post['row_description4'],
								   'row_description5'	=>	$post['row_description5'],
								   
								   'status'	=>	$post['status']
								 );
		}else{
			$values			=	array(
								   'title'	=>	$post['title'],
								   'url_key'	=>	$post['url_key'],
								   'pagetype'	=>	$post['pagetype'],
								   'description'	=>	$post['description'],
								   'status'	=>	$post['status']
								 );
		}						 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'page', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'page', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}