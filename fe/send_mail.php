<?php /*error_reporting(0);*/

	$mail = "poshtar.boba@gmail.com";
	$message = "<html>
    <body>
      <p>test</p>
    </body>
    </html>";
	$subject="Сообщение с сайта \"Мой сайт\"";
	mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");

        echo "Done.";
?>