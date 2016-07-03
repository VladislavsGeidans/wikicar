<div class="addlink">
	<a href="#">Добавить историю</a>
</div>

<?php
		$query = "SELECT * FROM history_mark";
		if ($result = mysqli_query($link, $query)) 
		{	
			echo "<table class='table'";
			echo "<tr>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Марка</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>История</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Исправить</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Удалить</td>
				  </tr>";								
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				echo "<tr>
						<td width='20%'>".$row['mark_name']."</td>
						<td width='50%'>".$row['history']."</td>
						<td width='5%' style='text-align: center; background: #f1f1f1;'><a href='#'>Исправить</a></td>
						<td width='5%' style='text-align: center; background: #f1f1f1;'><a href='#'>Удалить</a></td>
					  </tr>";
			}
			echo "</table>";
		}
?>