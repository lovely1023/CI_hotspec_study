<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Online volvo bus booking | AC Volvo Bus Booking Online Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Book AC Volvo bus tickets online at the lowest price. We are offering luxury volvo bus services for most of the cities in India.">
<meta name="keywords" content=" Volvo Bus Booking Services, Volvo bus booking, online Volvo bus booking, Book Volvo AC Bus Tickets Online, Bus Reservation">
<?php
		$this->load->view('includes/frontend_css');
?>

</head>
<body>
<?php 
   $pages    = $this->uri->segment(1);
   $pages1    = $this->uri->segment(2);
 if($pages=='' || ($pages=='home' && $pages1=='')){
?>
<?php
		$this->load->view('includes/header');
		
 }else
	 
	 {
		 $this->load->view('includes/inner_header');
	 }
?>

<?php
		$this->load->view($contents);
?>


<?php
 if($pages=='' || ($pages=='home' && $pages1=='')){
		$this->load->view('includes/footer');
 }else
 {
	$this->load->view('includes/inner_footer'); 
	 
 }
?>