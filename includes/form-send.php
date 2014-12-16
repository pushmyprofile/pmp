<?php session_start(); 
$errorfields = array();
$missingfields = array();

//check form has been submitted
if (isset($_POST['bookatable'])) {
	
	//Process Form
	$to = 'nick@pushmyprofile.co.uk';
	$subject = 'You Have Been Sent A Message';
	
	//List expected fields
	$expected = array('name', 'email', 'phone', 'enquiry' );
	//Set required fields
	$required = array('name', 'email', 'phone', 'enquiry');
	// Create Additional Headers
	$headers = "From: Push My Profile <info@pushmyprofile.com>\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	
	require_once('processmail.php');
		
	if ($mailSent) {
header('Location: thankyou');
	exit;
	
  }
  
} 

//check form has been submitted
if (isset($_POST['contactus'])) {
	
	//Process Form
	$to = 'nick@pushmyprofile.co.uk';
	$subject = 'General Enquiry';
	
	//List expected fields
	$expected = array('name', 'email', 'phone', 'enquiry' );
	//Set required fields
	$required = array('name', 'email', 'phone', 'enquiry');
	// Create Additional Headers
	$headers = "From: Balle Balle Website <booking@balleballebistro.com>\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	
	require_once('processmail.php');
		
	if ($mailSent) {
	header('Location: thankyou');
	exit;
	
  }
  
} 
?>