<?php error_reporting(0);
	$mail = 'poshtar.boba@gmail.com';
	$message = 'hello';
	$subject="mail_test";
	echo '... >>> ...';
	echo mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
	echo 'done';