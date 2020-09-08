<?php 
	$to = "sample_email@gmail.com";
	$subject = "Music Studio Reservation";

	$bname = $_POST['bname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];

	$headers .= "Content-type: text/html;\r\n";
	$headers .= "From: $contact";

	mail($to, $subject, $bname, $contact, $headers);
	echo "Your Reservation has been sent! Please wait for our response, thank you! $bname";

?>