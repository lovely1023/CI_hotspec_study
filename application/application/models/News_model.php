<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_news($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'news', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'news');
			return $sql->result();
		}
	}	
	public function save_news($post)
	{
		 $values			=	array(
		                               'category_id'	=>	$post['category_id'],
									   'title'	=>	$post['title'],						   
									   'is_popular'	=>	$post['is_popular'],
									   'short_description'	=>	$post['short_description'],'description'	=>	$post['description'],
									   'status'	=>	$post['status']
									 );
		if(isset($_FILES))
		{
			if($_FILES['image']['error']==0)
			{
				$path		  	=	$_FILES['image']['name']	;
				$fileName     	=   time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH.'news/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $fileName; // set the name here

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('image')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $values['image']     =  $fileName;
				}
			}
		}						 
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'news', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'news', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_news_cat($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'news_category', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'news_category');
			return $sql->result();
		}
	}	
	public function save_news_cat($post)
	{
		 $values			=	array(
									   'name'	=>	$post['name'],
									   'status'	=>	$post['status']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'news_category', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'news_category', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_category()
	{
		$sql	=	$this->db->get_where($this->prefix.'news_category', array('status'=>1));
		return $sql->result();
	}
	
	public function get_category_count($catid)
	{
	      $this->db->where('status', 1);
		  $this->db->where('category_id',$catid);		 
		  $sql	=	$this->db->get($this->prefix.'news');	
		  $res= $sql->result();			  
		  return count($res);
	}
	
}