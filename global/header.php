<ul class="navigation">
<div class="logo"><img src="img/logo_header.png" width="80"></div>
  	<li><a href="index.php?page=news">Новости</a></li>
  	<li><a href="index.php?page=cataloglink">Каталог</a></li>
  	<li><a href="index.php?page=history">История марок авто</a></li>
  	<li><a href="index.php?page=support">Обратная связь</a></li>
  	<?php 
      		if ($_SESSION['login']) 
      		{
      			echo '<li style="background: #13a5cc;"><a href="index.php?page=profile">Мой аккаунт <text style="font-weight: bold;">'.$_SESSION['login'].'</text></a></li>';
            echo '<li style="background: #c82309;"><a href="index.php?page=outsession">Выйти</a></form>';
            if (isset($_POST['out']))
            {
              session_destroy();
              header("Location: index.php?page=news");
            }
      		}
      		else 
      		{
      			echo '<li onclick="clickIn();" class="navigation_in">Вход</li>';
      		}
  	?>
</ul>

<div class="nav">
	<div class="logo"><img src="img/logo_header.png" width="80" style="float: left; position: relative; top: 0px;"></div>
	<a class="main-item" href="javascript:void(0);" tabindex="1" ><img src="img/select.png" width="15px"></a> 
	<ul class="sub-menu"> 
		<li><a href="index.php?page=news">Новости</a></li>
	  	<li><a href="index.php?page=cataloglink">Каталог</a></li>
	  	<li><a href="index.php?page=history">История марок авто</a></li>
	  	<li><a href="index.php?page=support">Обратная связь</a></li>
	</ul> 
</div>