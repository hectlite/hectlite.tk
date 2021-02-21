<?php
$to = "hectlite@gmail.com";
$subject = "Response from website";
$message = "you just requested for a software !!! your patience succeeds our mission";
$headers ="From: noreply@hectlite.tk";


if (mail ($to, $subject, $message, $headers) ) {
	echo "request succeeded";
}  else {
	echo "request unable to be processed";	
}

?>