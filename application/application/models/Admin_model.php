<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	
	public function get_banners($bnr_id=null)
	{
		if(!empty($bnr_id))
		{
			$sql	=	$this->db->get_where($this->prefix.'banner', array('id'=>$bnr_id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'banner');
			return $sql->result();
		}
	}
	
	public function save_banner_details($post)
	{
		 $values			=	array(
									   'name'	=>	$post['bnrName'],
									   'page'	=>	$post['page'],
									   'status'	=>	$post['bnrStatus']
									 );
			

        if(isset($_FILES))
		{			
			
			if($_FILES['training_brochure']['error']==0)
				{
					$path		  	=	$_FILES['training_brochure']['name']	;
					$fileName     	=   'brochure'.time().".".pathinfo($path, PATHINFO_EXTENSION);					
					$config['upload_path'] = UPLOAD_PATH;
					$config['allowed_types'] = '*';
					$config['file_name'] = $fileName; 
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('training_brochure')){
					   echo $this->upload->display_errors('<p>', '</p>');
					}else{
					  $values['training_brochure']     =  $fileName;
					}
				}
			
			
		}			
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'banner', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'banner', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	public function get_banners_item_list($bnr_id)
	{
		
		$sql	=	$this->db->get_where($this->prefix.'banner_item', array('banner_id'=>$bnr_id));
	    return $sql->result();
		
	}
	
	public function get_banners_item($bnr_id=null)
	{
		if(!empty($bnr_id))
		{
			$sql	=	$this->db->get_where($this->prefix.'banner_item', array('id'=>$bnr_id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'banner_item');
			return $sql->result();
		}
	}
	
	
	
	public function save_banner_item_details($bnr_id,$post)
	{
		 $values			=	array(
									   'banner_id'	=>	$bnr_id,
									   'name'	=>	$post['bnrName'],
									   'description'	=>	$post['description'],
									   'status'	=>	$post['bnrStatus']
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'banner_item', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'banner_item', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	
	
	public function get_homepage_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'homepage', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'homepage');
			return $sql->result();
		}
	}
	
	
	
	public function save_homepage_row($post)
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
				$this->db->update($this->prefix.'homepage', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'homepage', $values);
			  return $this->db->insert_id();
									
			}
	}	
	
	
	
	
	
	
	
	public function get_profile_detail()
	{
		 $user_id= $this->session->userdata['user_id'];
		$sql	=	$this->db->get_where($this->prefix.'tbl_login', array('id'=>$user_id));
			return $sql->row();
	}
	
	public function save_profile_details($post)
	{
		        $values			=	array(
									   'user_firstName'	=>	$post['user_firstName'],
									   
									   'user_lastName'	=>	$post['user_lastName'],
									   'user_email'	=>	$post['user_email'],
									   'user_phone'	=>	$post['user_phone'],
									   'user_username'	=>	$post['user_username'],
									   'user_password'	=>	$post['user_password'],
									   'user_address'	=>	$post['user_address'],
									 
									   
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				return $this->db->update($this->prefix.'tbl_login', $values);
				
			}
			
														 
	}
	
	public function save_testimonial_details($post)
	{
		  $values			=	array(
									   'name'	=>	$post['name'],
									   'description'	=>	$post['description'],
									 );
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				return $this->db->update($this->prefix.'testimonial', $values);
				
			}
			else
			{
			  return $this->db->insert($this->prefix.'testimonial', $values);
									
			}
														 
	}
	
	
	public function get_testimonial($id=null)
	{
		if(!empty($id))
		{
			$sql  = $this->db->get_where($this->prefix.'testimonial',array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql  = $this->db->get($this->prefix.'testimonial');
			return $sql->result();
		}
	}
	
	public function get_pages()
	{
		    
			$this->db->select('title,url_key');
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'page');
			return $sql->result();
	}
	
	
	
	
	
	
}