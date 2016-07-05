<html>
<head>
<title>Новости - WikiCar</title>
<link rel="stylesheet" type="text/css" href="css/tableinfo.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<style>
</style>
</head>
<body>



<?php

include ("/../includes/connect.php");
				$numchar = 300;

	if (isset($_GET['id_news']))
	{
		$query = "SELECT * FROM news WHERE id_news = ".$_GET['id_news']." && hide = 'show'  LIMIT 1";
		if ($result = mysqli_query($link, $query)) 
		{									
			while ($row = mysqli_fetch_assoc($result)) 
			{
				echo '<div class="name_news">'.$row['name'].'</div><br>';
				echo '<div class="body_news">'.$row['body'].'</div><br><br>';
			}
		}
	}
	else
	{
  		$count = 10;// Количество записей на странице
  		if(!isset($_GET["pages"])) 
  		{
  			$pages =1;
  		}
  		else 
  		{  
  			$pages = $_GET["pages"];
  		}
  		$shift = $count * ($pages - 1);
		$query = "SELECT * FROM news WHERE hide = 'show' ORDER BY id_news DESC LIMIT $shift, $count";
		if ($result = mysqli_query($link, $query)) 
		{						
			while ($row = mysqli_fetch_assoc($result)) 
			{
				$text_oreg = $row['body']; 
				$simbol = mb_strlen($text_oreg, 'utf-8');
				echo 
				'
					<table class="news-blank">
						<tr>
							<td class="news_fblank" style="border-bottom: 0px solid #CDAF95;">
								<a href=index.php?page=news&id_news='.$row['id_news'].'>'.$row['name'].'</a></p>
							</td>
						</tr>	
						<tr>
							<td>';
								if ($simbol <= $numchar)
								{
									echo "<p class=newsblock>".$row['body']."";
								}
								else if ($simbol > $numchar)
								{
									echo "<p class=newsblock>".substr($row["body"], 0, $numchar)."";
									echo " ...</p>";
								}
				echo '
							</td>
						</tr>							
					</table>
					<br><br><br>
				';
					}

					echo '<div class="newslinkblock">';
				
						$count = 10;
						$querys = "SELECT * FROM news";
						if ($results = mysqli_query($link, $querys)) 
						{
							$i = 0;
							while ($rows = mysqli_fetch_assoc($results)) 
							{
					   			$i++;
							}
						}
						$i = ceil($i / $count);
						for ($d = 1; $d <= $i; $d++) 
						{
					   		echo "<a class='newslink' href='index.php?page=news&pages=".$d."'>".$d."</a><span> </span>";
					   	}

				echo '</div>';
				}				
	}	
?>

</body>
</html>