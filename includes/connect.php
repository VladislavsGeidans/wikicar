<?php
include ("config.php");

	$link = mysqli_connect($host, $login, $pass, $db);
		if (mysqli_connect_errno()) {
					echo "Не подключились!";
		}
		else
		{
		mysqli_select_db($link, $db);
		mysqli_query ($link, "SET NAMES utf8");
		}
		
?>