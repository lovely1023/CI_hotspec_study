<?php   defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {
	
	public function  __construct()
	{
		parent::__construct();
		$this->prefix  = $this->db->dbprefix;
	}
	
	
	
    public function get_home_row($row_no)
	{
		$sql  = $this->db->get_where($this->prefix.'homepage',array('row_no'=>$row_no,'status'=>1));
		return $sql->row();
	}
	
	public function get_consulting_row($row_no)
	{
		$sql  = $this->db->get_where($this->prefix.'consultingpage',array('row_no'=>$row_no,'status'=>1));
		return $sql->row();
	}
	public function get_academy_row($row_no)
	{
		$sql  = $this->db->get_where($this->prefix.'academypage',array('row_no'=>$row_no,'status'=>1));
		return $sql->row();
	}
	
	
	public function get_banners($page)
	{
		
		$this->db->select("*");
		$this->db->from($this->prefix."banner_item bi");
		$this->db->join($this->prefix.'banner bnr','bnr.id=bi.banner_id');
		$this->db->where("bi.status",1);
		$this->db->where("bnr.page", $page);
		$sql       =   $this->db->get();
		return   $sql->result();
		
	}	


    public function get_testimonial()
	{
		$this->db->select("*");
		$this->db->from($this->prefix."testimonial");		
		$this->db->order_by("id","desc");		
		$sql   = $this->db->get();
		return $result = $sql->result();
		
	}
	
	public function get_testimonial_detail($id)
	{
		$this->db->select("*");
		$this->db->from($this->prefix."testimonial");
        $this->db->where("id",$id);				
		$sql   = $this->db->get();
		return $result = $sql->row();
		
	}
	
	public function get_faq()
	{
		$this->db->select("*");
		$this->db->from($this->prefix."faq");		
		$this->db->order_by("id","desc");		
		$sql   = $this->db->get();
		return $result = $sql->result();
		
	}
	
	public function get_page($url)
	{
		$this->db->select("*");
		$this->db->from($this->prefix."page");		
		$this->db->where("url_key",$url);
		$this->db->where("status",1);		
		$sql   = $this->db->get();
		return $result = $sql->row();
		
	}
	
	public function get_news_cat()
	{
		$sql	=	$this->db->get_where($this->prefix.'news_category', array('status'=>1));
	   return $sql->result();
	}	
	
	public function get_news($post=null)
	{
		if(!empty($post))
		{			
			if(!empty($post['search']))
			{			
			 $this->db->like('title', $post['search']);
			}
			if(!empty($post['cat']))
			{
				 $this->db->where('category_id', $post['cat']);			
			}
			
		}
		  $this->db->where('status', 1);	
		  $sql	=	$this->db->get($this->prefix.'news');	
		return $sql->result();
	}
	
	public function get_news_detail($id)
	{
		
		  $this->db->where('id',$id);	
		  $sql	=	$this->db->get($this->prefix.'news');	
		return $sql->row();
	}
	public function get_popular_news()
	{
		$sql	=	$this->db->get_where($this->prefix.'news', array('status'=>1,'is_popular'=>1));
		return $sql->result();
	}
	
	function getLatestNews()
	{		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'news');	
		  return $sql->result();
	}
	
	public function get_blog_cat()
	{
		$sql	=	$this->db->get_where($this->prefix.'blog_category', array('status'=>1));
	   return $sql->result();
	}	
	
	public function get_blog($post=null)
	{
		if(!empty($post['category']))
		{
		  $this->db->where('category_id', $post['category']);	
		}
		if(!empty($post['search']))
		{
		  $this->db->like('title', $post['search']);	
		}
		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'blog');	
		  return $sql->result();
		
	
	}
	public function get_blog_detail($id)
	{		

		$sql	=	$this->db->get_where($this->prefix.'blog', array('id'=>$id));
		
		$this->db->where('id', $id);
		$this->db->set('total_view', 'total_view+1', FALSE);
		$this->db->update('blog');
		
		return $sql->row();
	}
	public function get_popular_blog()
	{
		$sql	=	$this->db->get_where($this->prefix.'blog', array('status'=>1,'is_popular'=>1));
		return $sql->result();
	}
	
	public function get_video_blog()
	{
		$sql	=	$this->db->get_where($this->prefix.'blog', array('status'=>1,'is_video'=>1));
		return $sql->result();
	}
	
	public function get_recent_blog()
	{
		$this->db->from($this->prefix.'blog');
		$this->db->where("status", 1);
		$this->db->order_by("id", "asc");
		$this->db->limit(5);
		$query = $this->db->get(); 
		return $query->result();
		
	}
	
	public function get_ourwork_cat()
	{
		$sql = $this->db->get_where($this->prefix.'ourwork_category', array('status'=>1));
	   return $sql->result();
	}	
	
	public function get_ourwork($post=null)
	{
		if(!empty($post['catid']))
		{
		  $this->db->where('category_id', $post['catid']);	
		}
		if(!empty($post['search']))
		{
		  $this->db->like('title', $post['search']);	
		}
		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'ourwork');	
		  return $sql->result();
		
		
	}
	
	public function get_ourwork_detail($id)
	{
		$sql	=	$this->db->get_where($this->prefix.'ourwork', array('id'=>$id,'status'=>1));
		  return $sql->row();
		
	}
	
	function getLocation()
	{		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'location');	
		  return $sql->result();
	}
	
	function get_meet_our_team($post=null)
	{		
		if(!empty($post['location']))
		{
		  $this->db->where('location', $post['location']);	
		}
         if(!empty($post['role']))
		{
		  $this->db->where('role', $post['role']);	
		}
        if(!empty($post['pathways']))
		{
		  $this->db->where('pathways', $post['pathways']);	
		}		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'meet_our_team');	
		  return $sql->result();
	}
	function get_meet_our_team_filter()
	{		
				
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'meet_our_team');	
		  return $sql->result_array();
	}
	
	function get_careers($post=null)
	{		
        if(!empty($post))
		{
			if(!empty($post['search']))
			{			
			 $this->db->like('title', $post['search']);
			}
		}	
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'career');	
		  return $sql->result();
	}
	
	function get_career($id)
	{       
		  $this->db->where('id', $id);	
		  $this->db->where('status', 1);		 
		  $sql	=	$this->db->get($this->prefix.'career');	
		  return $sql->row();
	}
	
	function getTestimonials()
	{		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'testimonial');	
		  return $sql->result();
	}
	
	function getSuccessstory()
	{		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'success_stories');	
		  return $sql->result();
	}
	
	function getMeetourteams()
	{		
		  $this->db->where('status', 1);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'meet_our_team');	
		  return $sql->result();
	}
	
	public function get_recordlist($table, $whereField,$whereValue,$orderbyFiled)
	{
		  $this->db->where($whereField, $whereValue);	
		  $this->db->order_by($orderbyFiled, "desc");
		  $sql	=	$this->db->get($this->prefix.$table);	
		  return $sql->result();
		  
		
	}
	
	function getServices()
	{		
		  $this->db->where('status', 1);	
		  $this->db->where('parent_id', 0);	
		  $this->db->order_by("id", "desc");
		  $sql	=	$this->db->get($this->prefix.'hotspec_consulting');	
		  return $sql->result();
	}
	
	public function get_search_services($post=null)
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
	
	public function get_programs($post=null)
	{
		if(!empty($post))
		{			
			if(!empty($post['search']))
			{			
			 $this->db->like('title', $post['search']);
			}				
		}
		    $this->db->where('status','1');
			$this->db->order_by('id','desc');
			$sql	=	$this->db->get($this->prefix.'programme');
			return $sql->result();
	}
	
	
	public function subscribe($post)
	{
		  $values			=	array(
									   'email'	=>	$post['email'],
									   'page'	=>	$post['page']
									 );
			
          $this->db->where('email', $post['email']);	
		  $sql	=	$this->db->get($this->prefix.'subscriber');		  		
							 
	        if(!count( $sql->result()))
			{
				  $this->db->insert($this->prefix.'subscriber', $values);
			  return $this->db->insert_id();
				
			}else
			{
				return true;
			}
			
			
	}
	
	
	public function saveBlogComment($post)
	{
		  $values			=	array(
									   'blog_id'	=>	$post['blog_id'],
									   'name'	=>	$post['name'],
									   'email'	=>	$post['email'],
									   'website'	=>	$post['website'],
									   'blog_comment'	=>	$post['blog_comment'],
									   'status'	=>	1
									   
									   
									 );
			
          $this->db->where('blog_id', $post['blog_id']);	
		  $this->db->where('email', $post['email']);	
		  $sql	=	$this->db->get($this->prefix.'blog_comment');		  		
							 
	        if(!count( $sql->result()))
			{
				  $this->db->insert($this->prefix.'blog_comment', $values);
			  return $this->db->insert_id();
				
			}else
			{
				return true;
			}
			
			
	}
	
	
}