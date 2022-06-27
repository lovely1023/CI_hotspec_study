<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


 
 function timeAgo($time_ago) {	 
  
   date_default_timezone_set("Asia/Kolkata");     
    $time  = time() - strtotime($time_ago);
		switch($time):
		// seconds
		case $time <= 60;
		return 'lessthan a minute ago';
		// minutes
		case $time >= 60 && $time < 3600;
		return (round($time/60) == 1) ? 'a minute' : round($time/60).' minutes ago';
		// hours
		case $time >= 3600 && $time < 86400;
		return (round($time/3600) == 1) ? 'a hour ago' : round($time/3600).' hours ago';
		// days
		case $time >= 86400 && $time < 604800;
		return (round($time/86400) == 1) ? 'a day ago' : round($time/86400).' days ago';
		// weeks
		case $time >= 604800 && $time < 2600640;
		return (round($time/604800) == 1) ? 'a week ago' : round($time/604800).' weeks ago';
		// months
		case $time >= 2600640 && $time < 31207680;
		return (round($time/2600640) == 1) ? 'a month ago' : round($time/2600640).' months ago';
		// years
		case $time >= 31207680;
		return (round($time/31207680) == 1) ? 'a year ago' : round($time/31207680).' years ago' ;

		endswitch;
} 
 
function reformatDate($date, $from_format = 'd/m/Y', $to_format = 'Y-m-d')  
{		
	$date_aux = date_create_from_format($from_format, $date);
	return date_format($date_aux,$to_format); 
}

function getContact()
{   
    $CI = get_instance();
    $CI->load->model('Setting_model');    
    return $CI->Setting_model->get_rows();
}

function get_category_count($catid)
{   
    $CI = get_instance();
    $CI->load->model('News_model');    
    return $CI->News_model->get_category_count($catid);
}
function getBlogComment($id)
{   
    $CI = get_instance();
    $CI->load->model('Blog_model');    
    return $CI->Blog_model->getComment($id);
}