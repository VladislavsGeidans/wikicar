<?php


$to       = 'pisalka30@inbox.lv';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just recedasdasdasdfasdfasdg using sendmail!';
$headers  = 'From: pisalka30@gmail.com' . "\r\n" .
            'Reply-To: pisalka30@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers)
?>