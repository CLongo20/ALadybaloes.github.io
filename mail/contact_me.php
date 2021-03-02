<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['name'])     ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])   ||
   empty($_POST['time'])   ||
   empty($_POST['date'])   ||
   empty($_POST['name'])   ||
   empty($_POST['exampleRadios1'])   ||
   empty($_POST['exampleRadios2'])   ||
   empty($_POST['exampleRadios3'])   ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$time = strip_tags(htmlspecialchars($_POST['time']));
$date = strip_tags(htmlspecialchars($_POST['date']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$exampleRadios1 = strip_tags(htmlspecialchars($_POST['exampleRadios1']));
$exampleRadios2 = strip_tags(htmlspecialchars($_POST['exampleRadios2']));
$exampleRadios3 = strip_tags(htmlspecialchars($_POST['exampleRadios3']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'Camilalongocosta@hotmail.com'; // Add your email address inbetween the '' replacing Camilalongocosta@hotmail.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: Camilalongocosta@hotmail,com\n"; // This is the email address the generated message will be from. We recommend using something like Camilalongocosta@hotmail.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
