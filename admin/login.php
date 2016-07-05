<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="shortcut icon" href="../img/adminfavi.png" type="image/png">
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
		<title>Log in Admin Panel</title>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
		<script type="text/javascript">
			setTimeout(function(){$('.loginfail').fadeOut('fast')},3000); 
		</script>
	</head>
	<body class="loginbody">
		<center>
			<div class="login">
				<br>
				<img title="WikiCar" src="../img/logo_converted.png" width="150" margin="0 auto">
				<p>
				<form style="margin: 0 auto;" method="post">
					<p style="font-family: 'Fira Sans';">Username: </p><input type="text" name="user" /><br>
					<p style="font-family: 'Fira Sans';">Password: </p><input type="password" name="pass" /><br><br>
					<input style="width: 100px;" type="submit" name="submit" value="Войти" />
				</form>
			</div>
			<br>
			<br>

			<?php
				session_start();
				$admin = 'root';
				$pass = 'root';
				if(isset($_POST['submit'])) 
				{
					if($admin == $_POST['user'] AND $pass == $_POST['pass']) 
					{
						$_SESSION['admin'] = $admin;
						header("Location: index.php");
						exit;
					}
					else
					{
						echo '<div class="loginfail"><p>Логин или пароль неверны!</p></div><br>';
					}
				}
			?>

		</center>
	</body>
</html>