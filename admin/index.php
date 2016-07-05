<?php 
	header( 'Content-Type: text/html; charset=utf-8' );
	session_start();
	if(!$_SESSION['admin']){
		header("Location: login.php");
		exit;
	}
	error_reporting( E_ERROR );
	include ("../includes/config.php");
	include ("../includes/connect.php");
	include ("function/function.php");
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="shortcut icon" href="../img/adminfavi.png" type="image/png">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<div class="nav">
			<div class="logo">
				<img src="../img/logo_header.png" width="80px" float="left">
			</div>
			<li><a href="index.php?page=news">Новости</a></li>
			<li><a href="index.php?page=history">Истории авто</a></li>
			<li><a href="index.php?page=auto">Авто</a></li>
			<li><a href="login.php">Выйти</a></li>
		</div>
	</div>
	<div class="pages">
		<?php
			if ($_GET["page"] == "news") 
			{
				include ("page/news.php");
			}
			else if ($_GET["page"] == "history")
			{
				include ("page/history.php");
			}
			else if ($_GET["page"] == "auto")
			{
				include ("page/auto.php");
			}
			else 
			{
				include ("page/news.php");
			}
		?>
	</div>
</body>
</html>