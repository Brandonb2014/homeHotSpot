<?php
// Check for empty fields
if(empty($_POST['fname'])  		||
   empty($_POST['lname']) 		||
   empty($_POST['feedback'])
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['fname'] . ' ' . $_POST['lname'];
$feedback = $_POST['feedback'];

// Create the email and send the message
$to = 'reagent.venessa@gmail.com';
$email_subject = "New Feedback From The Home Hot Spot";
$email_body = "You have received new feedback from The Home Hot Spot.\n\n"."Here are the details:\n\nName: $name\n\nFeedback:\n$feedback";
$headers = "From: contactform@thehomehotspot.com\n";
$headers .= "Reply-To: noreply@thehomehotspot.com";	
mail($to,$email_subject,$email_body,$headers);
return true;
?>