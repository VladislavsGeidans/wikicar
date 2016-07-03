<link rel="stylesheet" type="text/css" href="../css/index.css">
<title>История марок авто - WikiCar</title>
<div class="historycar">

	<?php 
	if(isset($_GET['hist'])) $hist_link = $_GET['hist'];
	
	
	if (!isset($hist_link)){
		$query = "SELECT * FROM history_mark ";
						if ($result = mysqli_query($link, $query)) 
						{
							echo "<a href='index.php?page=news'><img src='img/back.png' width='30px'></a>";
							echo ("<p style='font-family: Fira Sans; font-size: 14; color: #5A5454;'>Марки авто:</p> <br>");
    						while ($row = mysqli_fetch_assoc($result)) 
    						{
        						echo ("<a href='index.php?page=history&hist=". $row["id"]."'>". $row["mark_name"]."</a><br>");
    						}
    						mysqli_free_result($result);
						}
						
		}
		else	
		{
						
			$query = "SELECT * FROM history_mark WHERE id=".$hist_link." limit 1";
						if ($result = mysqli_query($link, $query)) 
						{
    						while ($row = mysqli_fetch_assoc($result)) 
    						{
    							echo "<a href='index.php?page=history'><img src='img/back.png' width='30px'></a>";
        						echo ("<p style='font-family: Fira Sans; font-size: 14;'>". $row["history"]."</p><br>");
    						}
    						mysqli_free_result($result);
			}		
		}
		
	?>

</div>