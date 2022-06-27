<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Meetourteam_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'meet_our_team', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'meet_our_team');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'name'	=>	$post['name'],
									   'role'	=>	$post['role'],
									   'location'	=>	$post['location'],
									   'pathways'	=>	$post['pathways'],
									   'linkdin'	=>	$post['linkdin'],
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
					$config['allowed_types'] = 'gif|jpg|png|mp4';
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
				$this->db->update($this->prefix.'meet_our_team', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'meet_our_team', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}