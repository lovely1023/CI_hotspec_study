<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Skillscovered_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		if(!empty($id))
		{
			$sql	=	$this->db->get_where($this->prefix.'skillscovered', array('id'=>$id));
			return $sql->row();
		}
		else
		{
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'skillscovered');
			return $sql->result();
		}
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'title'	=>	$post['title'],									   								  
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
		}						 
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'skillscovered', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'skillscovered', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}