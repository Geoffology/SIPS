<?php


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$to = "geoffology@gmail.com";
$subject = "Contact";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;


$from = "FutureTutorials";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

?>
