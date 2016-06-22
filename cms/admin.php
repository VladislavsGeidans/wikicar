<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<link rel="shortcut icon" href="../img/adminfavi.png" type="image/png">
		<link href="../css/hover.css" rel="stylesheet" media="all">
		<title>Admin Panel</title>
	</head>
	<?php
	
	error_reporting( E_ERROR );

header( 'Content-Type: text/html; charset=utf-8' );
		session_start();

		if(!$_SESSION['admin']){
			header("Location: login.php");
			exit;
		}
	?>

	<body class="body">
	
	<?php
		include "global/header.html";
	?>

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
								include_once "admin.php";
							}

						?>

	</body>
</html>