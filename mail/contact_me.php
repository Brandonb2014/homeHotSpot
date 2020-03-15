<?php
// Check for empty fields
if(empty($_POST['fname'])  		||
   empty($_POST['lname']) 		||
   empty($_POST['email']) 		||
   empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['fname'] . ' ' . $_POST['lname'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'reagent.venessa@gmail.com';
$email_subject = "The Home Hot Spot:  $subject";
$email_body = "You have received a new lead from The Home Hot Spot.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: contactform@thehomehotspot.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;
?>