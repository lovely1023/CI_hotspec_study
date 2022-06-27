<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'testimonial', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'testimonial');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'title'	=>	$post['title'],
									   'user_name'	=>	$post['user_name'],
									   'designation'	=>	$post['designation'],
									   'star'	=>	$post['star'],
									   'description'	=>	$post['description'],
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
				$config['file_name'] = $fileName; 

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('image')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $values['image']     =  $fileName;
				}
			}
			
			if($_FILES['bottom_image']['error']==0)
			{
				$path		  	=	$_FILES['bottom_image']['name']	;
				$fileName     	=   'bottom'.time().".".pathinfo($path, PATHINFO_EXTENSION);
				
				
				$config['upload_path'] = UPLOAD_PATH;
				$config['allowed_types'] = '*';
				$config['file_name'] = $fileName; 

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('bottom_image')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $values['bottom_image']     =  $fileName;
				}
			}
			
			if($_FILES['screenshot']['error']==0)
			{
				$path		  	=	$_FILES['screenshot']['name']	;
				$fileName     	=   'screenshot'.time().".".pathinfo($path, PATHINFO_EXTENSION);				
				
				$config['upload_path'] = UPLOAD_PATH;
				$config['allowed_types'] = '*';
				$config['file_name'] = $fileName; 

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('screenshot')){
				   echo $this->upload->display_errors('<p>', '</p>');
				}else{
				  $values['screenshot']     =  $fileName;
				}
			}
			
		}	
							 
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'testimonial', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'testimonial', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}