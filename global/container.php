<link rel="stylesheet" type="text/css" href="../css/sitelogin.css">
<aside>
 	<div class="block">
 		<h1 class="blocktitle">Вход</h1>
 		<div class="blockcontent">Вход</h1>
			<div class="signin">
			Имя пользователя: <input id="signlog" type="text" name="login"><br />
			Пароль: <input id="signpass" type="password" name="pass"><br />
			<input id="signbut" type="submit" name="sign" value="Войти">
			</div>							
		</div>
		

 	</div>

 	<div class="block-bottom"></div>

	<div class="block">
 		<h1 class="blocktitle">Последние добавленые авто</h1>
 		<div class="blockcontent">
		
			<?php 
		
				include ("/../includes/connect.php");
				
				$query = "SELECT * FROM car_model ORDER BY id DESC LIMIT 5";
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) 
					{
						echo 
						'
					
							<p><a href="index.php?model='.$row['id'].'&page=Смотреть+информацию" class="containerlinks">'.$row['mark_name'].' '.$row['model_name'].' </a></p><p>
					
						';
					}

				}
				else
				{
					echo "Нет добавленых";
				}
		
			?>
			
		</div>

 	</div>

 	<div class="block-bottom"></div>

 	
</aside>

<div class="clearfix"></div>