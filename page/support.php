<head>
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
    	selector: "textarea"
 	});
</script>

<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
		<form method="POST">		

			<text style="color: #5A5454; font-family: Fira Sans; font-size: 14;">Ваш E-mail адрес:</text><br><input type="text" name="email"><br>	
			<hr>
			<text style="color: #5A5454; font-family: Fira Sans; font-size: 14;">Тема:</text><br><input type="text" name="temats"><br>
			<text style="color: #5A5454; font-family: Fira Sans; font-size: 14;">Текст сообщения:</text><br>
			<textarea name="text"></textarea><br>
			
			<input type="submit" name="sendmail" value="Отправить" location.href='C:\Apache24\htdocs\diplom\index.php'>
		</form>



<?php

include "includes/connect.php";

if(isset($_POST["sendmail"]))
{
	$email = $_POST['email'];
	$temats = $_POST['temats'];
	$text = $_POST['text'];

	$insert_sql = "INSERT INTO mails (email_cl, temats_m, text_m) 
					VALUES ('{$email}', '{$temats}', '{$text}')";
						if(! mysqli_query($link, $insert_sql))
						{
    						echo(mysqli_error($link));
						}	
						else 
						{
							header('Location: index.php');
							exit();
						}	
} 
?>