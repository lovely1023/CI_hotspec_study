<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_blog($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'blog', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'blog');
			return $sql->result();
		}
	}	
	public function save_blog($post)
	{
		 $values			=	array(
		                               'category_id'	=>	$post['category_id'],
									   'title'	=>	$post['title'],						   
									   'is_popular'	=>	$post['is_popular'],
									   'is_video'	=>	$post['is_video'],
									   'short_description'	=>	$post['short_description'],'description'	=>	$post['description'],
									   'author'	=>	$post['author'],
									   'status'	=>	$post['status']
									 );
		if(isset($_FILES))
		{
			if($_FILES['image']['error']==0)
			{
				$path		  	=	$_FILES['image']['name']	;
				$fileName     	=   time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH.'blog/';
				$config['allowed_types'] = 'gif|jpg|png';
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
				$this->db->update($this->prefix.'blog', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'blog', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_blog_cat($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'blog_category', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'blog_category');
			return $sql->result();
		}
	}	
	public function save_blog_cat($post)
	{
		 $values			=	array(
									   'name'	=>	$post['name'],
									   'status'	=>	$post['status']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'blog_category', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'blog_category', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_category()
	{
		$sql	=	$this->db->get_where($this->prefix.'blog_category', array('status'=>1));
		return $sql->result();
	}
	
	public function getComment($blogid)
	{
	    
		  $this->db->where('blog_id',$blogid);		 
		  $sql	=	$this->db->get($this->prefix.'blog_comment');	
		  return $sql->result();			  
		 
	}
	
}