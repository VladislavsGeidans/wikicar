<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="../../css/pagescms.css">
		<link href="../../css/hover.css" rel="stylesheet" media="all">
		<link rel="shortcut icon" href="../../img/adminfavi.png" type="image/png">
		<link href='https://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
		<title>Добавить новость | Admin Panel | WikiCar </title>
	</head>

	<body class="body">
	<center>
	<div class="pic"><img title="WikiCar" src="../../img/logo_converted.png" width="150"></div>
	<div class="navigation">
		<div class="header-menu">
			<ul class="nav">
				<li><a href="add-auto.php">Добавить авто</a></li>
				<li><a href="add-news.php">Добавить новость</a></li>
				<li><a href="../login.php"><img src="../../img/out.png" width="20"></a></li>
			</ul>
		</div>
	</div>
		</center>
	<br><br><br>
	<div class="addtwo">
				<center><h3>Добавить новость</h3> </center>
					<form name="forma" action="add-news.php" method="post">
						Название новости: <br><input name="title" type="text"><br>
						Текст новости: <br><textarea cols="97" rows="15" name="text"></textarea><br><p>
						<input name="add" type="submit" location.href='C:\Apache24\htdocs\diplom\cms\admin.php' value="Добавить запись">
					</form>

					<?php
						include ("../../includes/connect.php");
						
							if(isset($_POST["add"])){ 
							
   									$names = $_POST['title'];
  									$teksts = $_POST['text'];
									
  	 								$insert_sql = "INSERT INTO news (title, text) VALUES('{$names}', '{$teksts}');";
												  
									if(! mysqli_query($link, $insert_sql))
									{
										echo(mysqli_error($link));
									}
							}
					?>

   		</div>
		<br>
	</body>
</html>