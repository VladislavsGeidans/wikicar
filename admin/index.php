<?php 
	error_reporting( E_ERROR );
	include ("../includes/config.php");
	include ("../includes/connect.php");
	include ("../includes/function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
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