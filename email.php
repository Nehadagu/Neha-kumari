<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email address'];

$message= $_POST['message'];

$to = "nk3624620@mail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "r\n Contact =" . $contact;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: dagurneha50@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>