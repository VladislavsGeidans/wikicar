<?php
error_reporting( E_ERROR );
include ("includes/config.php");
include ("includes/connect.php");
include ("includes/function.php");
header( 'Content-Type: text/html; charset=utf-8' );

session_start();

?>
<html>
	<head>
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="shortcut icon" href="img/favico.png" type="image/png">
 		<link href='https://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
 		<script type="text/javascript" src="script.js"></script>
 		<script type="text/javascript">
 					function onClickLogIn(){
						document.getElementById("login").style.display = "block";
					}
					function clickExitLogIn(){
						document.getElementById("login").style.display = "none";
					}
 		</script>




	</head>
	<body id="base">
	<div class="container clearfix">
			<div id="top">
				<?php 
					include "global/header.php";
 				?>

 				<?php 


 				if (($_GET['page'] == "news") xor ($_GET['pages'] == "1"))
 				{
 				  echo '<div class="imgindex">';
                  echo '<div class="loginform">';
    						if (!isset($_SESSION["login"]))
    						{
    							echo '	<center>
    										<p onclick="clickX();" class="x_element">&#10006;</p>
    										<h3>Войти на сайт</h3>
		    								<form action="page/testreg.php" method="post">
												<p style="font-size: 12px;">Логин: <input type="text" name="login_name_in"><br></p>
												<p style="font-size: 12px;">Пароль: <input type="password" name="passw_in"><br></p>
												<input style="font-size: 12px;" type="submit" value="Войти" name="submit_in"><br><br>

												<a href="index.php?page=registration">Регистрация</a><br>
												<a href="#">Забыли пароль?</a>
											</form>
										</center>';
    						} 


    			  echo '</div></div><br>';
 				}


				?>

 				<div class="content-wrap">
					<section>
 						<div class="content">

						<?php 

							$page = $_GET['page'];

							if ($page == "news")
							{
								include_once "page/news.php";
							}

							else if ($page == "cataloglink")
							{
								include_once "page/catalog_link.php";
							}

							else if ($page == "history")
							{
								include_once "page/history.php";
							}

							else if ($page == "registration")
							{
								include_once "page/reg.php";
							}

							else if ($page == "profile")
							{
								include_once "page/profile.php";
							}

							else if ($page == "outsession")
							{
								include_once "page/outsession.php";
							}


							else if ($page == "support")
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

<script>
	function clickIn(){
		document.getElementsByClassName("loginform")[0].style.display = "block";
	}	
	function clickX(){
		document.getElementsByClassName("loginform")[0].style.display = "none";
	}
</script>

</body>

</html>
