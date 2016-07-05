<?php
error_reporting( E_ERROR );
include ("includes/config.php");
include ("includes/connect.php");
include ("includes/function.php");
header( 'Content-Type: text/html; charset=utf-8' );

session_start();
$admin = 'root';
$pass = 'root';
if(isset($_POST['submit'])) 
{
	if($admin == $_POST['user'] AND $pass == $_POST['pass']) 
	{
		$_SESSION['admin'] = $admin;
		header("Location: admin.php");
		exit;
	}
	else ?> <div class="loginfail"><p>Логин или пароль неверны!</p></div><br> <?php
}
?>
<html>
	<head>
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="shortcut icon" href="img/favico.png" type="image/png">
 		<link href='https://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
 		<script type="text/javascript" src="script.js"></script>



	</head>
	<body class="base">
	<div class="container clearfix">
			<div id="top">
				<?php 
					include "global/header.html";
 				?>
 				<?php 

 				if (($_GET['page'] == "news") xor ($_GET['pages'] == "1"))
 				{
 					echo '
 						<div class="imgindex">
			 					<div class="imgtext">
									<div class="ftext">
										WikiCar - всё о авто!
									</div>

									<div class="stext">
										Здесь вы найдете все авто, которые вас интересуют
									</div>
								</div>
							</div>
							<br>';
 				}


				?>

 				<div class="content-wrap">
					<section>
 						<div class="content">
						
						<?php
							if ($_GET['page'] == "news")
							{
								include_once "page/news.php";
							}

							else if ($_GET['page'] == "history")
							{
								include_once "page/history.php";
							}

							else if ($_GET['page'] == "cataloglink")
							{
								include_once "page/catalog_link.php";
							}

							else if ($_GET['page'] == "support")
							{
								include_once "page/support.php";
							}
							
							else
							{
								include_once "404.html";
							}

						?>
						
						
						
						
						
						
 						</div><br><br><br><br>
 								<?php 
 									include "global/footer.html";
 								?>
					</section>			
 				</div>
				
			
				
			</div>
	</div>
</div>

</body>

</html>
