<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Ourwork_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_ourwork($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'ourwork', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'ourwork');
			return $sql->result();
		}
	}	
	public function save_ourwork($post)
	{
		 $values	=	array(
		                               'category_id'	=>	$post['category_id'],
									   'title'	=>	$post['title'],									   
									   'is_video'	=>	$post['is_video'],
									   'short_description'	=>	$post['short_description'],'description'	=>	$post['description'],						 
									   'status'	=>	$post['status']
									 );
		if(isset($_FILES))
		{
			if($_FILES['image']['error']==0)
			{
				$path		  	=	$_FILES['image']['name']	;
				$fileName     	=   time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH.'ourwork/';
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


        if(isset($_FILES))
		{
			if($_FILES['icon']['error']==0)
			{
				$path		  	=	$_FILES['icon']['name']	;
				$fileName     	=   'middle'.time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH.'ourwork/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $fileName; // set the name here

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('icon')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $values['icon']     =  $fileName;
				}
			}
		}
		
		if(isset($_FILES))
		{
			if($_FILES['icon_bottom']['error']==0)
			{
				$path		  	=	$_FILES['icon_bottom']['name']	;
				$fileName     	=   'bottom'.time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH.'ourwork/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $fileName; // set the name here

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('icon_bottom')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $values['icon_bottom']     =  $fileName;
				}
			}
		}			
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'ourwork', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'ourwork', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_ourwork_cat($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'ourwork_category', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'ourwork_category');
			return $sql->result();
		}
	}	
	public function save_ourwork_cat($post)
	{
		 $values			=	array(
									   'name'	=>	$post['name'],
									   'status'	=>	$post['status']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'ourwork_category', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'ourwork_category', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_category()
	{
		$sql	=	$this->db->get_where($this->prefix.'ourwork_category', array('status'=>1));
		return $sql->result();
	}
	
}