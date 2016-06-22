<?php 
	error_reporting( E_ERROR );
	header( 'Content-Type: text/html; charset=utf-8' );
	session_start();
	if(!$_SESSION['admin'])
	{
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	 		<link href='https://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>ADMIN PANEL</title>
</head>
<body>
	<div class="general">
		<?php
			include "global/container.html";
		?>

		<div class="text">
			<?php
				if ($_GET['pages'] == "addauto")
				{
					include_once "pages/add-auto.php";
				}
				else if ($_GET['pages'] == "addnews")
				{
					include_once "pages/add-news.php";
				}
				else if ($_GET['pages'] == "mail")
				{
					include_once "pages/mailsupport.php";
				}	
				else
				{
					
				}
			?>
		</div>
	</div>
</body>
</html>