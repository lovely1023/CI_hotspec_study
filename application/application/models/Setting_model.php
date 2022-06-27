<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	public function get_rows($id=null)
	{
		$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'setting');
			return $sql->row();
	}
	
	
	
	public function save_row($post)
	{
		 $values			=	array(
									   'address'	=>	$post['address'],
									   'phone'	=>	$post['phone'],
									   'email'	=>	$post['email'],	
									   'getintuch_email'	=>	$post['getintuch_email'],	
									   'bookfreeconsultation_email'	=>	$post['bookfreeconsultation_email'],	
									   'careeraplynow_email'	=>	$post['careeraplynow_email'],	
									   'news_subscribtion_email'	=>	$post['news_subscribtion_email'],
									   'blog_subscribtion_email'	=>	$post['blog_subscribtion_email'],	
									   'name'	=>	$post['name'],	
									   'website'	=>	$post['website'],
									   'facebook_link'	=>	$post['facebook_link'],
									   'twitter_link'	=>	$post['twitter_link'],
									   'google_link'	=>	$post['google_link'],
									   'linkedin_link'	=>	$post['linkedin_link'],
									   'youtube_link'	=>	$post['youtube_link'],
									   'instagram_link'	=>	$post['instagram_link'],
									   'pinterest_link'	=>	$post['pinterest_link']									   
									 );
						 
									 
	        if(!empty($post['id']))
			{
				$this->db->where('id', $post['id']);
				$this->db->update($this->prefix.'setting', $values);
				return $post['id'];
				
			}
			else
			{
			  $this->db->insert($this->prefix.'setting', $values);
			  return $this->db->insert_id();
									
			}
	}
	
}