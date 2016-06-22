<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<link rel="shortcut icon" href="../img/adminfavi.png" type="image/png">
		<link href="../css/hover.css" rel="stylesheet" media="all">
		<link href='https://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
		<title>Log in Admin Panel</title>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
		<script type="text/javascript">
			setTimeout(function(){$('.loginfail').fadeOut('fast')},2000); 
		</script>
		</head>
		
		<body class="loginbody">
		<center>
			<div class="login">
				<br>
				<img title="WikiCar" src="../img/logo_converted.png" width="150" align="left">
				<a href="../index.php" float="right"><img src="../img/out.png" width="20" ></a>
				<br><br>
				Log in Admin Panel
				<p><br>
				<form method="post">
					Username: <input type="text" autocomplete="off" name="user" /><br />
					Password: <input type="password" autocomplete="off" name="pass" /><br />
					<input type="submit" name="submit" value="Войти" />
				</form>

			</div>
			<br>
			<br>

			<?php
				session_start();

				$admin = 'root';
				$pass = 'root';

				if(isset($_POST['submit'])) {
					if($admin == $_POST['user'] AND $pass == $_POST['pass']) {
						$_SESSION['admin'] = $admin;
						header("Location: admin.php");
						exit;
					}
					else ?> <div class="loginfail"><p>Логин или пароль неверны!</p></div><br> <?php
				}
			?>

		</center>

		</body>
</html>