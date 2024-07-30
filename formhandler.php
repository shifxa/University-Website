<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];//all data in respective $_post

$email_from = 'info@website.com';//domain name(website email ID)

$email_subject = 'New form submission';//

$email_body = "User Name : $name.\n".   //all info (\n for newline)
                "User email : $visitor.\n".
                "Subject : $subject.\n".
                " User Message : $message.\n";

$to = 'khanshifa122004@gamil.com';  //email ID where we want to recieve the enqueries

$headers = "From: $email_from \r\n";  //email from users

$headers = "Reply-To: $visitor_email \r\n"; 

mail($to,$email_subject,$email_body,$headers);  //send data on email

header("Location: contact.html"); //user will on contact page after submission
?>