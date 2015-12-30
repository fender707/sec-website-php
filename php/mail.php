<?php

	//form validation vars
	$formok = true;
	$errors = array();
	
	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
	
	//form data
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comments = $_POST['message'];

	$message = "Topic: " . $subject . " \r\n";
	$message .= "Email Address: " . $email . " \r\n";
	$message .= "Comments: " . $comments . " \r\n";

	mail("hello@secventures.com", "Contact Us Form", $message, "From: support@secventures.com");

?>

