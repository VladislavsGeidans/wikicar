<title>Истории - AdminPanel</title>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
<script>
	function onClickNewsAddForm(){
		document.getElementById("modaladd").style.display = "block";
	}
	function clickExitAddNewsForm(){
		document.getElementById("modaladd").style.display = "none";
	}

	function clickExitEditNewsForm(){
		document.getElementById("modaledit").style.display = "none";
	}

	tinymce.init({
    	selector: "textarea"
 	});

 	setTimeout(function(){$('.nevibranno').fadeOut('fast')},3000); 
</script>

<div class="addlink">
	<div onclick="onClickNewsAddForm();">
		<input type="submit" value="Добавить историю" name="add_news"><hr>
	</div>
	<div id="modaladd" style="width: 700px;">
		<div onclick="clickExitAddNewsForm();" class="exitaddnews"></div>
		<div width="700px">
				<center><h3>Добавить историю</h3></center>
					<form name="forma" method="post">
						Марка: <br><input name="title" type="text"><br><br>
						Текст новости: <br><textarea style="width: 100%;" cols="97" rows="15" name="text"></textarea><br><p>
						<input name="add" style="position: relative; left: 80%; " type="submit" value="Добавить историю">
					</form>

					<?php
						include ("../includes/connect.php");
							if(isset($_POST["add"]))
							{ 
   									$mark = $_POST['title'];
  									$history = $_POST['text'];
									
  	 								$insert_sql = "INSERT INTO history_mark (mark_name, history) VALUES('{$mark}', '{$history}');";
												  
									if(! mysqli_query($link, $insert_sql))
									{
										echo(mysqli_error($link));
									}
									exit;
							}
					?>
   			</div>
	</div>
</div>

	<form method="post">
		<input type="submit"  id="editnews" value="Изменить выбранные" name="edit_id">
		<input type="submit" value="Удалить выбранные" name="delete_id"><br><hr>
<?php


		$query = "SELECT * FROM history_mark ORDER BY id DESC";
		if ($result = mysqli_query($link, $query)) 
		{	
			echo "<table class='table'>";
			echo "<tr>
					<td style='text-align: center; color: #FFF; background: #838B8B;'></td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>Марка</td>
					<td style='text-align: center; color: #FFF; background: #838B8B;'>История</td>
				  </tr>";								
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				echo "<tr>
						<td width='1%'><input type='checkbox' name='checkboxvar[]' value='".$row['id']."'></td>
						<td width='5%'>".$row['mark_name']."</td>
						<td width='95%'>".$row['history']."</td>
					  </tr>";
			}
			echo "</table>";
		}
echo "</form>";
	
	/* ИЗМЕНИТЬ НОВОСТЬ ИЗ БАЗЫ ДАННЫХ */

		if (isset($_POST['edit_id']))
		{
			echo '<div id="modaledit" style="overflow: auto; width: 700px; height: 500px;"><div onclick="clickExitEditNewsForm();" class="exiteditnews"></div>';
  			$aDoor = $_POST['checkboxvar'];
  			if(!empty($aDoor))
  			{
    			$N = count($aDoor);
    			for($i=0; $i < $N; $i++)
    			{			
					$editid = $_POST['checkboxvar'];	
					$showeditnews = "SELECT * FROM history_mark WHERE id = ".$editid[0]." LIMIT 1";
					$resulte = mysqli_query($link, $showeditnews);
					while ($row_e = mysqli_fetch_assoc($resulte)) 
					{
						echo "<form method='post'>";
						echo "<center><h3>Корекция истории</h3></center>";
						echo "<input name='id_e' type='hidden' value='".$row_e['id']."'>";
						echo "Название: <br><input name='name_e' type='text' value='".$row_e['mark_name']."'><br><br>";
						echo "Текст новости: <textarea style='height: 250px;' name='edit_t'>".$row_e['history']."</textarea><br>";
					    echo "<input style='position: relative; left: 88.5%;' type='submit' name='b_e' value='Изменить'>";
						echo "</form>";
   					}
  				}	

			}
			echo "</div>";	
		}
		
	#Кнопка изменить в модальном окне!
		if (isset($_POST['b_e'])) 
		{
			$id_news = $_POST['id_e'];
			$name_b = $_POST['name_e'];
			$text_b = $_POST['edit_t'];
			$edit_n = "UPDATE history_mark SET mark_name = '".$name_b."', history = '".$text_b."' WHERE id = '".$id_news."' LIMIT 1";
			mysqli_query($link, $edit_n); 
		}

	/* --- */


	/* УДАЛЕНИЕ ЗАПИСИ ИЗ БАЗЫ ДАННЫХ */
		
		if (isset($_POST['delete_id']))
		{
	  		$aDoor = $_POST['checkboxvar'];
	  		if(empty($aDoor))
	  		{
	   			echo("<div class='nevibranno'>Вы ничего не выбрали.</div>");
	  		}
	  		else
	  		{
	    		$N = count($aDoor);
	    		for($i=0; $i < $N; $i++)
	    		{
					$delete = 'DELETE FROM history_mark WHERE id='.$aDoor[$i].'';
					mysqli_query($link, $delete);
	   			}
	  		}		
		}	

	/* --- */


?>