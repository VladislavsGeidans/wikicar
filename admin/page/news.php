<meta charset="utf-8">
<title>Новости - AdminPanel</title>
<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<script>
	function onClick(){
		document.getElementById("modal").style.display = "block";
	}
	function clickDel(){
		document.getElementById("modal").style.display = "none";
	}
</script>

<div class="addlink">

<!-- ДОБАВЛЕНИЕ НОВОСТИ -->

	<div onclick="onClick();">
		<input type="submit" value="Добавить новость" name="add_news">
	</div>
	<div id="modal">
		<div onclick="clickDel();" class="del">
		</div>
		<div class="addnewsform">
				<center><h3>Добавить новость</h3></center>
					<form name="forma" method="post">
						Название новости: <br><input name="title" type="text"><br>
						Текст новости: <br><textarea style="width: 100%;"cols="97" rows="15" name="text"></textarea><br><p>
						Видимость: <br><input type="radio" name="hide" value="show"> Видно<Br><input type="radio" name="hide" value="hide"> Не видно<Br>
						<input name="add" style="position: relative; left: 80%; " type="submit" value="Добавить запись">
					</form>

					<?php
						include ("../includes/connect.php");
							if(isset($_POST["add"]))
							{ 
   									$names = $_POST['title'];
  									$teksts = $_POST['text'];
  									$hide = $_POST['hide'];
									
  	 								$insert_sql = "INSERT INTO news (name, body, hide) VALUES('{$names}', '{$teksts}', '{$hide}');";
												  
									if(! mysqli_query($link, $insert_sql))
									{
										echo(mysqli_error($link));
									}
							}
					?>
   			</div>
	</div>

<!---->


	<form method='post'>
		<input type="submit" value="Удалить выбранные" name="delete_id">
		<input type="submit" value="Изменить выбранные" name="edit_id">
		<input type="submit" value="Скрыть выбранную новость" name="hide_id">
</div>





<?php
		$query = "SELECT * FROM news ORDER BY id_news DESC";
		if ($result = mysqli_query($link, $query)) 
		{	
			echo "<table class='table'";
			echo "<tr>
					<td style='text-align: center; color: #FFF; background: #838B8B;'></td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Имя</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Текст</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Видимость</td>
				  </tr>";								
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				echo "<tr>
						<td width='1%'><input type='checkbox' name='checkboxvar[]' value='".$row['id_news']."'></td>
						<td width='20%'>".$row['name']."</td>
						<td width='50%'>".$row['body']."</td>
						<td width='5%' style='text-align: center;'>".$row['hide']."</td>
					  </tr>";
			}
			echo "</table>";
		}
echo "</form>";


	/* УДАЛЕНИЕ ЗАПИСИ ИЗ БАЗЫ ДАННЫХ */

	if (isset($_POST['delete_id']))
	{
  		$aDoor = $_POST['checkboxvar'];
  		if(empty($aDoor))
  		{
   			echo("Вы ничего не выбрали.");
  		}
  		else
  		{
    		$N = count($aDoor);
    		for($i=0; $i < $N; $i++)
    		{
				$delete = 'DELETE FROM news WHERE id_news='.$aDoor[$i].'';
				mysqli_query($link, $delete);
   			}
			header("Location: index.php");
  		}		
	}		

	/* --- */


	/* ИЗМЕНЕНИЕ ЗАПИСИ ИЗ БАЗЫ ДАННЫХ */

	if (isset($_POST['edit_id']))
	{
		$aDoor = $_POST['checkboxvar'];
		if(empty($aDoor))
		{
			echo("Вы ничего не выбрали.");
		}
		else 
		{
			header("Location: funtion/edit.php");

		}
	}

	/* --- */

?>