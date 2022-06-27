<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*--------Custom url----------*/
$route['about-us'] 						= 'home/about_us';
$route['gallery'] 						= 'home/gallery';
$route['who-we-are'] 				= 'home/who_we_are';
$route['what-we-do'] 				= 'home/what_we_do';
$route['consulting'] 				= 'home/consulting';
$route['academy'] 				= 'home/academy';
$route['framework'] 				= 'home/our_framework';
$route['our-framework'] 				= 'home/our_framework';
$route['news'] 				= 'home/news';
$route['newsdetail/(:any)'] = 'home/newsdetail/$1';
$route['blog'] 				= 'home/blog';
$route['blogdetail/(:any)'] 				= 'home/blogdetail/$1';
$route['our-work'] 			= 'home/ourwork';
$route['our-work/(:any)'] 			= 'home/ourwork_detail/$1';
$route['career'] 				= 'home/career';
$route['careers-detail/(:any)'] = 'home/careers_detail/$1';
$route['faq'] 				= 'home/faq';
$route['get-in-touch'] 				= 'home/get_in_touch';
$route['term-conditions'] 				= 'home/term_conditions';
$route['terms-and-conditions'] 				= 'home/term_conditions';
$route['privacy-policy'] 				= 'home/privacy_policy';
$route['cookies'] 				= 'home/cookies';
$route['testimonials-and-reviews'] = 'home/testimonials_and_reviews';
$route['testimonials-detail/(:any)'] = 'home/testimonials_and_reviews_detail/$1';
$route['meet-our-team'] = 'home/meet_our_team';
$route['contact-us'] 					= 'home/contact_us';
$route['programme'] 			= 'programme/index';
$route['programme/detail/(:any)'] 			= 'programme/detail/$1';
$route['services'] 			= 'services/index';
$route['services/detail/(:any)'] 			= 'services/detail/$1';

$route['success-stories'] 			= 'Successstory/index';
$route['success-stories/detail/(:any)'] 			= 'Successstory/detail/$1';

$route['admin'] 			    		= 'admin/access';
$route['admin/login'] 	   				= 'admin/access/login';
$route['logout'] 	   				    = 'admin/access/logout';
$route['(:any)'] 				= 'home/page/$1';
