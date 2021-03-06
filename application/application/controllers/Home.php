<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model", "common");
		$this->load->model("Setting_model");
		$this->load->library('email');
	   $this->load->helper('cookie');

	}
	public function index()
	{
		$data['page_title']			=	'Home: volvotrip';
		$data['contents']			=	'home';
	
		$data['banners']			=	$this->common->get_banners('home');
		$data['row1']			=	$this->common->get_home_row(1);	
		$data['row2']			=	$this->common->get_home_row(2);	
		$data['row3']			=	$this->common->get_home_row(3);	
		$data['row4']			=	$this->common->get_home_row(4);	
		$data['row5']			=	$this->common->get_home_row(5);	
		$data['row6']			=	$this->common->get_home_row(6);	
		$data['row7']			=	$this->common->get_home_row(7);	
		$data['row8']			=	$this->common->get_home_row(8);	
		$data['row9']			=	$this->common->get_home_row(9);	
		$data['row10']			=	$this->common->get_home_row(10);	
		$data['row11']			=	$this->common->get_home_row(11);	
		$data['row12']			=	$this->common->get_home_row(12);	
		$data['row13']			=	$this->common->get_home_row(13);	
		$data['row14']			=	$this->common->get_home_row(14);	
		$data['row15']			=	$this->common->get_home_row(15);	
		$data['row16']			=	$this->common->get_home_row(16);	
		$data['row17']			=	$this->common->get_home_row(17);	
		$data['row18']			=	$this->common->get_home_row(18);
		$data['row19']			=	$this->common->get_home_row(19);
		
		$data['blogcategories']			=	$this->common->get_blog_cat();
		$data['blogs']			    =	$this->common->get_blog();
		$data['popular_blogs']		=	$this->common->get_popular_blog();
		
        $data['categories']		=	$this->common->get_news_cat();
		$data['newss']			=	$this->common->getLatestNews();	
		$data['locations']		=	$this->common->getLocation();
      
        $data['testimonials']		=	$this->common->getTestimonials();
		$data['meetourteams']		=	$this->common->getMeetourteams();
		
		$data['hotspecconsultings']		=	$this->common->getServices();	       
		$data['hotspecacademys']		=	$this->common->get_recordlist('hotspecacademy','status','1','id');	       
	    $data['skillscovereds']		=	$this->common->get_recordlist('skillscovered','status','1','id');       
		$data['targetgroup']		=	$this->common->get_recordlist('targetgroup','status','1','id');		
        $data['learningexperience']		=	$this->common->get_recordlist('learningexperience','status','1','id');       
		$data['ourgroupvalues']		=	$this->common->get_recordlist('ourgroupvalues','status','1','id');	
        $data['ourworks']		=	$this->common->get_recordlist('ourwork','status','1','id');	
        $data['programmes']		=	$this->common->get_recordlist('programme','status','1','id');	
		
	
		
		$this->load->view('template', $data);
	}
	
	public function about_us()
	{
		$data['page_title']			=	'About us: volvotrip';
		$data['contents']			=	'about-us';
		$this->load->view('template', $data);
	}
	
	public function contact_us()
	{
		$data['page_title']			=	'contact us: volvotrip';
		$data['contents']			=	'contact-us';
		$this->load->view('template', $data);
	}
	
	public function sendEmail()
	{
		$post      =   $this->input->post();
		$setting= $this->Setting_model->get_rows();
		
		$fname	   =   $post['fname'];
		$lname	   =   $post['lname'];
		$email	   =   $post['email'];
		$phone	   =   $post['phone'];
		$company	   =   $post['company'];
		
		$message   =   $post['message'];	
		
		$msg='<table>
			<tr><th><h4>Contact Information</h4></th></tr>
			<tr><td>First Name:</td> <td>'.$fname.'</td></tr>
			<tr><td>Last Name:</td> <td>'.$lname.'</td></tr>
			<tr><td>Email:</td> <td>'.$email.'</td></tr>
			<tr><td>Phone Number:</td> <td>'.$phone.'</td></tr>
			<tr><td>Company Name:</td> <td>'.$company.'</td></tr>
			<tr><td>Message:</td> <td>'.$message.'</td></tr>
			</table>';

		
		$this->email
			->from($email, $name)
			->to($setting->getintuch_email)
			->reply_to($email, $name)
			->subject('Get in Touch')
			->message($msg)
			->set_mailtype('html');
		
		if($this->email->send())
		{
			echo 'mail sent';
		}
		
		exit;	
		
	}
	
	
	function who_we_are()
	{
		$data['page_title']			=	    "Who we are";
		$data['contents']			=		'who-we-are';
		$data['banners']			=	$this->common->get_banners('who-we-are');
		$data['page']			=	$this->common->get_page('who-we-are');
		$this->load->view("template", $data);
	}
	
	
	function what_we_do()
	{
		$data['page_title']			=	    "What we do";
		$data['contents']			=		'what-we-do';
		$data['banners']			=	$this->common->get_banners('what-we-do');
		$data['page']			=	$this->common->get_page('what-we-do');
		$this->load->view("template", $data);
	}
	
	function consulting()
	{
		$data['page_title']			=	    "consulting";
		$data['contents']			=		'consulting';
		$data['banners']			=	$this->common->get_banners('consulting');
		$data['row1']			=	$this->common->get_consulting_row(1);	
		$data['row2']			=	$this->common->get_consulting_row(2);	
		$data['row3']			=	$this->common->get_consulting_row(3);	
		$data['row4']			=	$this->common->get_consulting_row(4);	
		$data['row5']			=	$this->common->get_consulting_row(5);	
		$data['row6']			=	$this->common->get_consulting_row(6);	
		$data['row7']			=	$this->common->get_consulting_row(7);	
		$data['row8']			=	$this->common->get_consulting_row(8);	
		$data['row9']			=	$this->common->get_consulting_row(9);	
		$data['row10']			=	$this->common->get_consulting_row(10);	
		$data['row11']			=	$this->common->get_consulting_row(11);
	    $data['row12']			=	$this->common->get_consulting_row(12);
	
		$data['blogcategories']			=	$this->common->get_blog_cat();		
		$data['blogs']			    =	$this->common->get_blog();
		$data['popular_blogs']		=	$this->common->get_popular_blog();		
        $data['categories']		=	$this->common->get_news_cat();
		$data['newss']			=	$this->common->getLatestNews();	
		$data['locations']		=	$this->common->getLocation();      
        $data['testimonials']		=	$this->common->getTestimonials();
		$data['meetourteams']		=	$this->common->getMeetourteams();
		
		$data['hotspecconsultings']		=	$this->common->getServices();	       
		$data['hotspecacademys']		=	$this->common->get_recordlist('hotspecacademy','status','1','id');	       
	    $data['skillscovereds']		=	$this->common->get_recordlist('skillscovered','status','1','id');       
		$data['targetgroup']		=	$this->common->get_recordlist('targetgroup','status','1','id');		
        $data['learningexperience']		=	$this->common->get_recordlist('learningexperience','status','1','id');       
		$data['ourgroupvalues']		=	$this->common->get_recordlist('ourgroupvalues','status','1','id');	
		$data['ourworks']		=	$this->common->get_recordlist('ourwork','status','1','id');	
		$this->load->view("template", $data);
	}
	
	function academy()
	{
		$data['page_title']			=	    "academy";
		$data['contents']			=		'academy';
		$data['banners']			=	$this->common->get_banners('academy');
		$data['row1']			=	$this->common->get_academy_row(1);	
		$data['row2']			=	$this->common->get_academy_row(2);	
		$data['row3']			=	$this->common->get_academy_row(3);	
		$data['row4']			=	$this->common->get_academy_row(4);	
		$data['row5']			=	$this->common->get_academy_row(5);	
		$data['row6']			=	$this->common->get_academy_row(6);	
		$data['row7']			=	$this->common->get_academy_row(7);	
		$data['row8']			=	$this->common->get_academy_row(8);	
		$data['row9']			=	$this->common->get_academy_row(9);	
		$data['row10']			=	$this->common->get_academy_row(10);	
		$data['row11']			=	$this->common->get_academy_row(11);	
		$data['row12']			=	$this->common->get_academy_row(12);	
		$data['row13']			=	$this->common->get_academy_row(13);	
		$data['row14']			=	$this->common->get_academy_row(14);	
		$data['row15']			=	$this->common->get_academy_row(15);	
		$data['row16']			=	$this->common->get_academy_row(16);
		
		$data['blogcategories']			=	$this->common->get_blog_cat();		
		$data['blogs']			    =	$this->common->get_blog();
		$data['popular_blogs']		=	$this->common->get_popular_blog();		
        $data['categories']		=	$this->common->get_news_cat();
		$data['newss']			=	$this->common->getLatestNews();	
		$data['locations']		=	$this->common->getLocation();      
        $data['testimonials']		=	$this->common->getSuccessstory();
		$data['meetourteams']		=	$this->common->getMeetourteams();	
		
		$data['hotspecconsultings']		=	$this->common->getServices();	       
		$data['hotspecacademys']		=	$this->common->get_recordlist('hotspecacademy','status','1','id');	       
	    $data['skillscovereds']		=	$this->common->get_recordlist('skillscovered','status','1','id');       
		$data['targetgroup']		=	$this->common->get_recordlist('targetgroup','status','1','id');		
        $data['learningexperience']		=	$this->common->get_recordlist('learningexperience','status','1','id');       
		$data['ourgroupvalues']		=	$this->common->get_recordlist('ourgroupvalues','status','1','id');	
		$data['ourworks']		=	$this->common->get_recordlist('ourwork','status','1','id');	
		$data['hotspecacademycounters']		=	$this->common->get_recordlist('hotspecacademycounter','status','1','id');	
		$this->load->view("template", $data);
	}
	
	function our_framework()
	{
		$data['page_title']			=	    "framework";
		$data['contents']			=		'framework';
		$data['banners']			=	$this->common->get_banners('framework');
		$data['page']			=	$this->common->get_page('framework');
		$this->load->view("template", $data);
	}
	
    function news()
	{
		
		$data['page_title']			=	    "news";
		$data['contents']			=		'news';
		$data['banners']			=	$this->common->get_banners('news');
		$data['categories']			=	$this->common->get_news_cat();
		$data['newss']			=	$this->common->get_news($_REQUEST);
		$data['popular_newss']			=	$this->common->get_popular_news();
		$data['most_views_newss']			=	$this->common->get_news();
		$this->load->view("template", $data);
	}
	
	
	function newsdetail($id)
	{
		
		$data['page_title']			=	    "news";
		$data['contents']			=		'newsdetail';
		$data['banners']			=	$this->common->get_banners('news');
		$data['categories']			=	$this->common->get_news_cat();	
		$data['popular_newss']			=	$this->common->get_popular_news();
		$data['news']			=	$this->common->get_news_detail($id);
		$data['most_views_newss']			=	$this->common->get_news();
		$this->load->view("template", $data);
	}
	
	
	function blog()
	{
		$data['page_title']			=	    "blog";
		$data['contents']			=		'blog';
		
		$data['banners']			=	$this->common->get_banners('blog');
		$data['categories']			=	$this->common->get_blog_cat();
		$data['blogs']			    =	$this->common->get_blog($_REQUEST);
		$data['popular_blogs']		=	$this->common->get_popular_blog();
		$data['video_blogs']	    =	$this->common->get_video_blog();
		$data['recent_blogs']		=	$this->common->get_recent_blog();
		
		$this->load->view("template", $data);
	}
	
	function blogdetail($id)
	{
		$data['page_title']			=	    "blog";
		$data['contents']			=		'blogdetail';
		
		$data['banners']			=	$this->common->get_banners('blog');
		$data['categories']			=	$this->common->get_blog_cat();
		$data['blog']			    =	$this->common->get_blog_detail($id);
		$data['popular_blogs']		=	$this->common->get_popular_blog();
		$data['video_blogs']	    =	$this->common->get_video_blog();
		$data['recent_blogs']		=	$this->common->get_recent_blog();
		
		$this->load->view("template", $data);
	}
	
	function career()
	{
		$data['page_title']			=	    "career";
		$data['contents']			=		'career';
		$data['banners']			=	$this->common->get_banners('career');
		$data['page']			=	$this->common->get_page('career');
		$data['careers']			=	$this->common->get_careers($_REQUEST);
		$this->load->view("template", $data);
	}
	
	function careers_detail($id)
	{
		
		$data['page_title']			=	    "career";
		$data['contents']			=		'careers-detail';
		$data['banners']			=	$this->common->get_banners('career');		
		$data['career']			=	$this->common->get_career($id);
		$this->load->view("template", $data);
		
	}
	
	function faq()
	{
		$data['page_title']			=	    "faq";
		$data['contents']			=		'faq';
		$data['banners']			=	$this->common->get_banners('faq');
		$data['faqs']			=	$this->common->get_faq();
		$data['row18']			=	$this->common->get_home_row(18);
		$data['locations']		=	$this->common->getLocation();
		$data['page']			=	$this->common->get_page('faq');
		$this->load->view("template", $data);
	}
	function get_in_touch()
	{
		$data['page_title']			=	    "get-in-touch";
		$data['contents']			=		'get-in-touch';
		$data['banners']			=	$this->common->get_banners('get-in-touch');
		$data['page']			=	$this->common->get_page('get-in-touch');
		$this->load->view("template", $data);
	}
	

	
	function term_conditions()
	{
		$data['page_title']			=	    "Term & Conditions";
		$data['contents']			=		'terms_conditions';
		$data['page']			=	$this->common->get_page('terms-conditions');
		$this->load->view("template", $data);
	}
	function privacy_policy()
	{
		$data['page_title']			=	    "Privacy & Policy";
		$data['contents']			=		'Privacy_Policy';
		$data['page']			=	$this->common->get_page('privacy-policy');
		$this->load->view("template", $data);
	}
	function cookies()
	{
		$data['page_title']			=	    "cookies";
		$data['contents']			=		'cookies';
		$data['page']			=	$this->common->get_page('cookies');
		$this->load->view("template", $data);
	}
	
	function Gallery()
	{
		$data['page_title']			=	    "gallery";
		$data['contents']			=		'gallery.php';
		
		$this->load->view("template", $data);
	}
	
	function ourwork()
	{
		$data['page_title']			=	    "ourwork";
		$data['contents']			=		'ourwork';		
		$data['banners']			=	$this->common->get_banners('ourwork');
		$data['categories']			=	$this->common->get_ourwork_cat();
		$data['ourworks']			=	$this->common->get_ourwork($_REQUEST);
		$data['page']			=	$this->common->get_page('ourwork');
		$this->load->view("template", $data);
	}
	function ourwork_detail($id)
	{
		$data['page_title']			=	    "ourwork detail";
		$data['contents']			=		'ourwork-detail';		
		$data['banners']			=	$this->common->get_banners('ourwork');		
		$data['ourwork']			=	$this->common->get_ourwork_detail($id);
		$data['page']			=	$this->common->get_page('ourwork');
		$this->load->view("template", $data);
	}
	
	function testimonials_and_reviews()
	{
		
		$data['page_title']			=	    "testimonials and reviews";
		$data['contents']			=		'testimonials_and_reviews';		
		$data['banners']			=	$this->common->get_banners('testimonials-reviews');		
		$data['testimonials']			=	$this->common->get_testimonial();
		$data['page']			=	$this->common->get_page('testimonials-reviews');
		$this->load->view("template", $data);
	}
	
	function testimonials_and_reviews_detail($id)
	{
		
		$data['page_title']			=	    "testimonials and reviews";
		$data['contents']			=		'testimonials-detail.php';		
		$data['banners']			=	$this->common->get_banners('testimonials-reviews');		
		$data['testimonial']			=	$this->common->get_testimonial_detail($id);
		$data['page']			=	$this->common->get_page('testimonials-reviews');
		$data['testimonials']			=	$this->common->get_testimonial();
		$this->load->view("template", $data);
	}
	
	function meet_our_team()
	{
		
		$data['page_title']			=	    "meet our team";
		$data['contents']			=		'meet-our-team';		
		$data['banners']			=	$this->common->get_banners('meet-our-team');
        $data['filtermeetourteams']	=	$this->common->get_meet_our_team_filter();		
		$data['meetourteams']		=	$this->common->get_meet_our_team($_REQUEST);
	
		$this->load->view("template", $data);
	}
	
	public function page($pageurl)
	{
		$data['page_title']			=	    $pageurl;
		$data['contents']			=		$pageurl;
		$data['banners']			=	$this->common->get_banners($pageurl);
		$data['page']			=	$this->common->get_page($pageurl);
		$this->load->view("template", $data);
	}
	public	function login()
	{

		$resp = array();
		$post = $this->input->post();
    	$login_status = 'invalid';
		$result = $this->common->check_user($post);
		if ($result)
		{
			$this->session->set_userdata($result);
			$login_status = 'success';
	    }
		$resp['login_status'] = $login_status;
		if ($login_status == 'success')
			{
			$resp['redirect_url'] = 'admin/dashboard';
			}

		echo json_encode($resp);

	}
		
		
		
	public 	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');

	}
	
    public function apply_now()
	{
		
		$post      =   $this->input->post();		
		$fname	   =   $post['first_name'];
		$lname	   =   $post['last_name'];
		$email	   =   $post['email'];
		$phone	   =   $post['phone'];
		$additional_info   =   $post['additional_info'];			
	  $setting= $this->Setting_model->get_rows();
		
		$attachment_file = "";
		if (!empty($_FILES) && isset($_FILES["attachment_file"])) {

			$image_name = $_FILES["attachment_file"]['name'];

			$ext = pathinfo($image_name, PATHINFO_EXTENSION);
			$new_name = time();
			$config['file_name'] = $new_name . $ext;
			$config['upload_path'] = UPLOAD_PATH.'email/';
			$config['allowed_types'] = "*";
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('attachment_file')) {
				$finfo = $this->upload->data();
				$attachment_file = UPLOAD_PATH.'email/' . $finfo['file_name'];
			} 
		
		}		
		
		  $msg='<table>
			<tr><th><h4>New Job Application</h4></th></tr>
			<tr><td>First Name:</td> <td>'.$fname.'</td></tr>
			<tr><td>Last Name:</td> <td>'.$lname.'</td></tr>
			<tr><td>Email:</td> <td>'.$email.'</td></tr>
			<tr><td>Phone Number:</td> <td>'.$phone.'</td></tr>			
			<tr><td>Additional info:</td> <td>'.$additional_info.'</td></tr>
			</table>'; 

		$this->email->from($email, "$fname")
				->to($setting->careeraplynow_email)
				->subject("Application form from $fname")
				->message($msg)
				->set_mailtype('html')
				->attach($attachment_file);

		if ($this->email->send()) {			
			$this->session->set_flashdata('success', '<p>Thanks for applying! </p>
<p>One of our colleagues will get back in touch with you soon!</p>
<p>Have a great day!</p>');			
		}else{
			$this->session->set_flashdata('error', 'Fail to send mail');
		}
		
		redirect(BASE_URL.'career');		 
		
	}


    public function subscribe()
	{
		$post      =   $this->input->post();		
		$email	   =   $post['email'];
		$page	   =   $post['page'];			
		$result = $this->common->subscribe($post);
		 $setting= $this->Setting_model->get_rows();
		
		$msg='<table>
			<tr><th><h4><p>Thank you for subscribing to our News!</p> 
                <p>Have a great day!</p></h4></th></tr>
			</table>';
			
		$this->email
			->from($setting->news_subscribtion_email, 'hotspec')
			->to($email)
			->subject('Thank you for subscribing to our News!')			
			->message($msg)
 			->set_mailtype('html');
			
	 setcookie('newssubscribe','yes',time()+1000,'/'); 	
		
		if($this->email->send())
		{
			echo 'mail sent';
		}
		
		exit;	
		
	}
	
	public function blogsubscribe()
	{
		$post      =   $this->input->post();		
		$email	   =   $post['email'];
		$page	   =   $post['page'];			
		$result = $this->common->subscribe($post);
		$setting= $this->Setting_model->get_rows();
		
		$msg='<table>
			<tr><th><h4><p>Thank you for subscribing to our Blog!</p> 
                <p>Have a great day!</p></h4></th></tr>
			</table>';
			
		$this->email
			->from($setting->blog_subscribtion_email, 'hotspec')
			->to($email)
			->subject('Thank you for subscribing to our Blog!')			
			->message($msg)
 			->set_mailtype('html');
			
	
    setcookie('blogsubscribe','yes',time()+1000,'/'); 
		
			
		if($this->email->send())
		{
			echo 'mail sent';
		}
		
   
		
		exit;	
		
	}

    public function sendgettouchEmail()
	{
		$post      =   $this->input->post();
		$setting= $this->Setting_model->get_rows();
		
		$fname	   =   $post['fname'];
		$lname	   =   $post['lname'];
		$email	   =   $post['email'];
		$phone	   =   $post['phone'];
		$company	   =   $post['company'];
		
		$message   =   $post['message'];	
		
		$msg='<table>
			<tr><th><h4>Contact Information</h4></th></tr>
			<tr><td>First Name:</td> <td>'.$fname.'</td></tr>
			<tr><td>Last Name:</td> <td>'.$lname.'</td></tr>
			<tr><td>Email:</td> <td>'.$email.'</td></tr>
			<tr><td>Phone Number:</td> <td>'.$phone.'</td></tr>
			<tr><td>Company Name:</td> <td>'.$company.'</td></tr>
			<tr><td>Message:</td> <td>'.$message.'</td></tr>
			</table>';

		
		$this->email
			->from($email, $name)
			->to($setting->getintuch_email)
			->reply_to($email, $name)
			->subject('Get in Touch')
			->message($msg)
			->set_mailtype('html');
		
		if($this->email->send())
		{
			echo 'mail sent';
		}
		
		exit;	
		
	} 

    public function sendBookafreeconsultationEmail()
	{
		$post      =   $this->input->post();
		$setting= $this->Setting_model->get_rows();
		
		$fname	   =   $post['fname'];
		$lname	   =   $post['lname'];
		$email	   =   $post['email'];
		$phone	   =   $post['phone'];
		$company	   =   $post['company'];
		$service	   =   $post['service'];
		
		$message   =   $post['message'];	
		
		$msg='<table>
			<tr><th><h4>Free Business Consultation Information</h4></th></tr>
			<tr><td>First Name:</td> <td>'.$fname.'</td></tr>
			<tr><td>Last Name:</td> <td>'.$lname.'</td></tr>
			<tr><td>Email:</td> <td>'.$email.'</td></tr>
			<tr><td>Phone Number:</td> <td>'.$phone.'</td></tr>
			<tr><td>Company Name:</td> <td>'.$company.'</td></tr>
			<tr><td>Service:</td> <td>'.$service.'</td></tr>
			<tr><td>Message:</td> <td>'.$message.'</td></tr>
			</table>';

		
		$this->email
			->from($email, $name)
			->to($setting->bookfreeconsultation_email)
			->reply_to($email, $name)
			->subject('Book A Free Consultation')
			->message($msg)
			->set_mailtype('html');
		
		if($this->email->send())
		{
			echo 'mail sent';
		}
		
		exit;	
		
	}

    public function submitBlogComment()
	{		
		$post   =   $this->input->post();		
		$result = $this->common->saveBlogComment($post);		
		if($result)
		{
			echo'save';
		}
		
		
	}	
	
  function search()
	{
		
		$data['page_title']			=	    "search";
		$data['contents']			=		'search';		
			
		$data['blogs']			    =	$this->common->get_blog($_REQUEST);
	    $data['services']			    =	$this->common->get_search_services($_REQUEST);
	    $data['newss']			=	$this->common->get_news($_REQUEST);
		$data['careers']			=	$this->common->get_careers($_REQUEST);
		$data['programs']			=	$this->common->get_programs($_REQUEST);
		$this->load->view("template", $data);
	}	
		
	
}
