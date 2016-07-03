<div class="addlink">
	<a href="#">Добавить новость</a>
</div>

<?php
		$query = "SELECT * FROM news";
		if ($result = mysqli_query($link, $query)) 
		{	
			echo "<table class='table'";
			echo "<tr>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Имя</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Текст</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Видимость</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Исправить</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Скрыть</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Удалить</td>
				  </tr>";								
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				echo "<tr>
						<td width='20%'>".$row['name']."</td>
						<td width='50%'>".$row['body']."</td>
						<td width='5%' style='text-align: center;'>".$row['hide']."</td>
						<td width='5%' style='text-align: center; background: #f1f1f1;'><a href='#'>Исправить</a></td>
						<td width='5%' style='text-align: center; background: #f1f1f1;'><a href='#'>Скрыть</a></td>
						<td width='5%' style='text-align: center; background: #f1f1f1;'><a href='#'>Удалить</a></td>
					  </tr>";
			}
			echo "</table>";
		}
?>