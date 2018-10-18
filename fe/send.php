<?php 
error_reporting(1);
	
	$mail = 'poshtar.boba@gmail.com';
	$message = 'Hello! This is test email';
	$subject = 'Test email';
	if (mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n")) {
			echo "Done.";
	} else {
		echo 'Bad';
	}
	
	
