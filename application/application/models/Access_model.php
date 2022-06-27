<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Access_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function check_user($post)
	{
	    $username =  $post["username"];
		$password =  $post["password"];
		
		$this->db->select("*");
		$this->db->from($this->prefix."tbl_login");
		$this->db->where("user_username",$username);
		$this->db->where("user_password",md5($password));
		$this->db->where("user_type",'admin');		
		$this->db->where("user_status",1);
		
		$sql      =  $this->db->get();
        
		if($sql->num_rows()>0)
		{
			$row   =  $sql->row();
			
			$returnData    =  array(
									   'user_id' => $row->id,
									   'user_name' => $row->user_firstName.' '.$row->user_lastName,
									   'user_email'=> $row->user_email,
									   'user_type'=> $row->user_type,
									   'commission'=> $row->commission
									);
									
		 return $returnData;							
		  
		}
		else
		{
			return false;
		}
		
		
	}
}

?>