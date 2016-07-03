<head>
<title>Обратная связь - WikiCar</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
<meta charset="utf-8">
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
</head>
		<form method="POST">		
		<a href='index.php?page=news'><img src='img/back.png' width='30px'></a><br><br>
			<input placeholder="Введите сюда E-mail!" type="text" name="email"><br>
			<input placeholder="Введите сюда тему!" type="text" name="temats"><br>
			<textarea class= "textarea" placeholder="Введите сюда отзыв!" name="mess" rows="15" cols="100%"></textarea><br>
			
			<input type="submit" name="sendmail" value="Отправить" style="float: right;" location.href='C:\Apache24\htdocs\diplom\index.php'>
		</form>



<?php

		$temats = $_POST["temats"];
		$email = $_POST["email"];
		$texts = $_POST["mess"];

		if (isset($_POST['sendmail'])) {
			if ((isset($temats)) and (isset($email)) and (isset($texts))) {
				$to       = 'vladislavsgeidans@inbox.lv';
				$subject  = 'Temats: '.$temats.' || E-Mail: '.$email;
				$message  = $_POST["mess"];
				$headers  = 'From: pisalka30@gmail.com' . "\r\n" .
            				'Reply-To: pisalka30@gmail.com' . "\r\n" .
            				'MIME-Version: 1.0' . "\r\n" .
            				'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            				'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
				header('Location: index.php?page=news');
			}
		}

?>