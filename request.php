<?php
//get data from form
$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']
$to = "hectlite@gmail.com";
$subject ="Mail from hectlite";
$txt ="Name = ". $name . "\r\n Email = " .$email . $email . "\r\n Message =" . $message;
$headers = "From: noreply@hectlite.com" . "\r\n .
"CC: somebodyelse@example.com";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);
}
//redirect
header("location:thankyou.html");
?>