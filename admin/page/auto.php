<div class="addlink">
	<a href="#">Добавить авто</a>
</div>

<?php
		$query = "SELECT * FROM car_model";
		if ($result = mysqli_query($link, $query)) 
		{	
			echo "<p style='font-size: 16px; color: #5A5454;'>Авто</p>";								
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				echo "<a href='#'>".$row['mark_name']." ".$row['model_name']."</a><br>";
			}
			echo "</table>";
		}
?>