<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspecconsulting_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'hotspec_consulting', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'hotspec_consulting');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'name'	=>	$post['name'],
									   'parent_id'	=>	$post['parent_id'],
									   'role'	=>	$post['role'],	
									   'url'	=>	$post['url'],									   
									   'description'	=>	$post['description'],
									   'short_descpription'	=>	$post['short_descpription'],
									   'tabdescription' =>serialize($post['tabdescription']),
									   'status'	=>	$post['status']
									 );
									 
			if(isset($_FILES))
			{
				if($_FILES['image']['error']==0)
				{
					$path		  	=	$_FILES['image']['name']	;
					$fileName     	=   time().".".pathinfo($path, PATHINFO_EXTENSION);
					
					
					$config['upload_path'] = UPLOAD_PATH;
					$config['allowed_types'] = '*';
					$config['file_name'] = $fileName; // set the name here

					$this->upload->initialize($config);

					if (!$this->upload->do_upload('image')){
					   echo $this->upload->display_errors('<p>', '</p>');
					}else{
					  $values['image']     =  $fileName;
					}
				}
				
				
				if($_FILES['services_brochure']['error']==0)
				{
					$path		  	=	$_FILES['services_brochure']['name']	;
					$fileName     	=   'brochure'.time().".".pathinfo($path, PATHINFO_EXTENSION);
					
					
					$config['upload_path'] = UPLOAD_PATH;
					$config['allowed_types'] = '*';
					$config['file_name'] = $fileName; 
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('services_brochure')){
					   echo $this->upload->display_errors('<p>', '</p>');
					}else{
					  $values['services_brochure']     =  $fileName;
					}
				}
				
				/*if($_FILES['business_consultation']['error']==0)
				{
					$path		  	=	$_FILES['business_consultation']['name']	;
					$fileName     	=   'consultation'.time().".".pathinfo($path, PATHINFO_EXTENSION);
					
					
					$config['upload_path'] = UPLOAD_PATH;
					$config['allowed_types'] = '*';
					$config['file_name'] = $fileName; 
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('business_consultation')){
					   echo $this->upload->display_errors('<p>', '</p>');
					}else{
					  $values['business_consultation']     =  $fileName;
					}
				}*/
			}								 
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'hotspec_consulting', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'hotspec_consulting', $values);
			  return $this->db->insert_id();
									
			}
	}
	
	
	public function get_services($post=null)
	{
		if(!empty($post))
		{			
			if(!empty($post['search']))
			{			
			 $this->db->like('name', $post['search']);
			}				
		}
		    $this->db->where('status','1');
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'hotspec_consulting');
			return $sql->result();
	}
	
	public function get_sub_services($pid=null)
	{
		
		    $this->db->where('status','1');
			if($pid)
			{
			 $this->db->where('parent_id',$pid);
			}else{
			 $this->db->where('parent_id !=',0);	
			}
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'hotspec_consulting');
			return $sql->result();
	}
	
	public function get_subservices($post=null)
	{
		   if(!empty($post['search']))
			{			
			 $this->db->like('name', $post['search']);
			}
			
		    $this->db->where('status','1');
			$this->db->where('parent_id !=',0);	
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'hotspec_consulting');
			return $sql->result();
	}
	
	
	public function get_service($id)
	{
		
		    $this->db->where('id',$id);
			$this->db->or_where('url',$id);
			$sql	=	$this->db->get($this->prefix.'hotspec_consulting');
			return $sql->row();
	}
	
}