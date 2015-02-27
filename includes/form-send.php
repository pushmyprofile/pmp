<?php session_start(); 
$errorfields = array();
$missingfields = array();

//check form has been submitted
if (isset($_POST['sendusamessage'])) {
	
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
if (isset($_POST['hireus'])) {
	
	//Process Form
	$to = 'nick@pushmyprofile.co.uk';
	$subject = 'Hire Us - Project Request';
	
	//List expected fields
	$expected = array('name', 'position',  'email', 'phone', 'websiteurl', 'worktype', 'budget' );
	//Set required fields
	$required = array('name', 'email', 'phone', 'worktostart', 'budget', 'worktype');
	// Create Additional Headers
	$headers = "From: Push My Profile <info@pushmyprofile.co.uk>\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	
	require_once('processmail.php');
		
	if ($mailSent) {
	header('Location: project-details.php');
	exit;
	
  }
  
} 
?>