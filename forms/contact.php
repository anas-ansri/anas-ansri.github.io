<?php

$message_sent = false;
if (isset($_POST['email']) &&  $_POST['email'] != "") {
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //Submit message
    $receiving_email_address = 'anas.22010219@viit.ac.in';  //receiving email address

    $to = $receiving_email_address;
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    // $body = "";
    // $body = "From: " . $from_name . "\r\n";
    // $body = "Email: " . $from_email . "\r\n";
    // $body = "Message: " . $message . "\r\n";

    // mail($to, $subject, $message);
    $message_sent = true;
  }
}


?>



// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$contact->smtp = array(
'host' => 'example.com',
'username' => 'example',
'password' => 'pass',
'port' => '587'
);
*/