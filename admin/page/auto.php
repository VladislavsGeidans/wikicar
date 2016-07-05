<meta charset="utf-8">
<title>Авто - AdminPanel</title>
<script>
	/*Модальное окно*/
		function onClickNewsAddForm(){
			document.getElementById("modaladdcar").style.display = "block";
		}
		function clickExitAddNewsForm(){
			document.getElementById("modaladdcar").style.display = "none";
		}

		function clickExitEditNewsForm(){
			document.getElementById("modaledit").style.display = "none";
		}

	/* --- */

	/* Уведомление для ошибки */
 		setTimeout(function(){$('.nevibranno').fadeOut('fast')},3000); 
 	/* --- */
</script>
<div class="addlink">
	<div onclick="onClickNewsAddForm();">
		<input type="submit" value="Добавить авто" name="add_car"><hr>
	</div>

	<div id="modaladdcar" style="width: 700px;">
		<div onclick="clickExitAddNewsForm();" class="exitaddcar"></div>

		<meta charset="utf8">
		<?php
			header( 'Content-Type: text/html; charset=utf-8' );
					
					if(isset($_POST["add"])){ 
					$mark_name = $_POST['mark_name'];
					$mark = $_POST['mark'];
					$model = $_POST['model'];
					$cuzovtype = $_POST['cuzovtype'];
					$kolmest = $_POST['kolmest'];
					$koldver = $_POST['koldver'];
					$dlina = $_POST['dlina'];
					$wirina = $_POST['wirina'];
					$visota = $_POST['visota'];
					$typedvig = $_POST['typedvig'];
					$obdvig = $_POST['obdvig'];
					$moshnost = $_POST['moshnost'];
					$krutmoment = $_POST['krutmoment'];
					$dvigsite = $_POST['dvigsite'];
					$typetop = $_POST['typetop'];
					$rashod = $_POST['rashod'];
					$klapan = $_POST['klapan'];
					$privod = $_POST['privod'];
					$maxspeed = $_POST['maxspeed'];
					$razgon = $_POST['razgon'];
					$uploaddir = '../carimg/';
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'';
$apend1="".$apend.".jpg"; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend1"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/jpeg') && ($_FILES['userfile']['size'] != 0))
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 20000 && $size[1]<20000) 
     { 
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
     echo "Файл загружен. Путь к файлу: <b>".$uploadfile."</b>"; 
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Размер файла не должен превышать 512Кб";
} 	
						
						
						
						
						
					$insert_sql = "INSERT INTO car_model (marka_id, mark_name, model_name, cuzovtype, kolmest, koldver, dlina, wirina, visota, typedvig, obdvig, moshnost, krutmoment, dvigsite, typetop, rashod, klapan, privod, maxspeed, razgon, photo) VALUES ('{$mark}' , '{$mark_name}', '{$model}' , '{$cuzovtype}', '{$kolmest}', '{$koldver}', '{$dlina}', '{$wirina}', '{$visota}', '{$typedvig}', '{$obdvig}', '{$moshnost}', '{$krutmoment}', '{$dvigsite}', '{$typetop}', '{$rashod}', '{$klapan}', '{$privod}', '{$maxspeed}', '{$razgon}', '{$apend}')";
					if(! mysqli_query($link, $insert_sql))
					{
    					echo(mysqli_error($link));
					}
				}
					
		?>

			<div class="add">
					<br>
					<div class="udob">
						<form method="post"  enctype=multipart/form-data>
							Марка: <select name="mark">
									<option value="" disabled selected> --- Выберите марку --- </option>
									<option value="1">AC Cars</option>
									<option value="2">Acura</option>
									<option value="3">Alfa Romeo</option>
									<option value="4">Aston Martin</option>
									<option value="5">Audi</option>
									<option value="6">Bentley</option>
									<option value="7">BMW</option>
									<option value="8">Bugatti</option>
									<option value="9">Cadillac</option>
									<option value="10">Chevrolet</option>
									<option value="11">Chrysler</option>
									<option value="12">Citroen</option>
									<option value="13">Dacia</option>
									<option value="14">Dodge</option>
									<option value="15">Ferrari</option>
									<option value="16">Fiat</option>
									<option value="17">Ford</option>
									<option value="18">Honda</option>
									<option value="19">Hummer</option>
									<option value="20">Hyundai</option>
									<option value="21">Infiniti</option>
									<option value="22">Jaquar</option>
									<option value="23">Jeep</option>
									<option value="24">Kia</option>
									<option value="25">Lada</option>
									<option value="26">Lamborqhini</option>
									<option value="27">Lancia</option>
									<option value="28">Lexus</option>
									<option value="29">Lincoln</option>
									<option value="30">Lotus</option>
									<option value="31">Maserati</option>
									<option value="32">Maybach</option>
									<option value="33">Mazda</option>
									<option value="34">Mclaren</option>
									<option value="35">Mercedes-Benz</option>
									<option value="36">Mini</option>
									<option value="37">Mitsubishi</option>
									<option value="38">Nissan</option>
									<option value="39">Opel</option>
									<option value="40">Peugeot</option>
									<option value="41">Porsche</option>
									<option value="42">Renault</option>
									<option value="43">Rover</option>
									<option value="44">Saab</option>
									<option value="45">Seat</option>
									<option value="46">Skoda</option>
									<option value="47">Smart</option>
									<option value="48">Subaru</option>
									<option value="49">Suzuki</option>
									<option value="50">Toyota</option>
									<option value="51">Volkswagen</option>
									<option value="52">Volvo</option>
									</select><br /><br />
							Марка: <select placeholder="Выберите марку" name="mark_name">
									<option value="" disabled selected> --- Выберите марку --- </option>
									<option value="AC Cars">AC Cars</option>
									<option value="Acura">Acura</option>
									<option value="Alfa Romeo">Alfa Romeo</option>
									<option value="Aston Martin">Aston Martin</option>
									<option value="Audi">Audi</option>
									<option value="Bentley">Bentley</option>
									<option value="BMW">BMW</option>
									<option value="Bugatii">Bugatti</option>
									<option value="Cadillac">Cadillac</option>
									<option value="Chevrolet">Chevrolet</option>
									<option value="Chrysler">Chrysler</option>
									<option value="Citroen">Citroen</option>
									<option value="Dacia">Dacia</option>
									<option value="Dodge">Dodge</option>
									<option value="Ferrari">Ferrari</option>
									<option value="Fiat">Fiat</option>
									<option value="Ford">Ford</option>
									<option value="Honda">Honda</option>
									<option value="Hummer">Hummer</option>
									<option value="Hyundai">Hyundai</option>
									<option value="Infiniti">Infiniti</option>
									<option value="Jaquar">Jaquar</option>
									<option value="Jeep">Jeep</option>
									<option value="Kia">Kia</option>
									<option value="Lada">Lada</option>
									<option value="Lamborqhini">Lamborqhini</option>
									<option value="Lancia">Lancia</option>
									<option value="Lexus">Lexus</option>
									<option value="Lincoln">Lincoln</option>
									<option value="Lotus">Lotus</option>
									<option value="Maserati">Maserati</option>
									<option value="Maybach">Maybach</option>
									<option value="Mazda">Mazda</option>
									<option value="McLaren">McLaren</option>
									<option value="Mercedes-Benz">Mercedes-Benz</option>
									<option value="Mini">Mini</option>
									<option value="Mitsubishi">Mitsubishi</option>
									<option value="Nissan">Nissan</option>
									<option value="Opel">Opel</option>
									<option value="Peugeot">Peugeot</option>
									<option value="Porsche">Porsche</option>
									<option value="Renault">Renault</option>
									<option value="Rover">Rover</option>
									<option value="Saab">Saab</option>
									<option value="Seat">Seat</option>
									<option value="Skoda">Skoda</option>
									<option value="Smart">Smart</option>
									<option value="Subaru">Subaru</option>
									<option value="Suzuki">Suzuki</option>
									<option value="Toyota">Toyota</option>
									<option value="Volkswagen">Volkswagen</option>
									<option value="Volvo">Volvo</option>
									</select><br /><br />
							Модель: <input type="text" name="model" /><br /><br /><hr />
							Тип кузова: <select name="cuzovtype">
											<option value="" disabled selected> --- Выберите кузов --- </option>
											<option value="седан">седан</option>
											<option value="универсал">универсал</option>
											<option value="хетчбэк">хечбэк</option>
											<option value="купе">купе</option>
											<option value="лимузин">лимузин</option>
											<option value="микроавтобус">микроавтобус</option>
											<option value="минивэн">минивэн</option>
											<option value="кабриолет">кабриолет</option>
											<option value="фаэтон">фаэтон</option>
											<option value="спайдер">спайдер</option>
										</select><br /><br />
							Количество мест: <input type="text" name="kolmest" /><br /><br />
							Количество дверей: <input type="text" name="koldver" /><br /><br />
							Длина, мм: <input type="text" name="dlina" /><br /><br />
							Ширина, мм: <input type="text" name="wirina" /><br /><br />
							Высота, мм: <input type="text" name="visota" /><br /><br /><hr />
							Тип двигателя: <input type="text" name="typedvig" /><br /><br />
							Обьем двигателя, куб. см: <input type="text" name="obdvig" /><br /><br />
							Мощность, л.с./об мин: <input type="text" name="moshnost" /><br /><br />
							Крутящий момент, Нм/об мин: <input type="text" name="krutmoment" /><br /><br />
							Расположение двигателя: <select name="dvigsite">
														<option value="" disabled selected> --- Выберите расположение двигателя --- </option>
														<option value="сзади">сзади</option>
														<option value="спереди">спереди</option>
														<option value="центрально">центрально</option>
													</select><br /><br />
							Тип топлива: <select name="typetop">
											<option value="" disabled selected> --- Выберите тип топлива --- </option>
											<option value="бензин">бензин</option>
											<option value="дизель">дизель</option>
										</select><br /><br />
							Расход, л на 100 км: <input type="text" name="rashod" /><br /><br />
							Клапанов на цилиндр: <input type="text" name="klapan" /><br /><br /><hr />
							Привод: <select name="privod">
										<option value="" disabled selected> --- Выберите привод --- </option>
										<option value="передний">Передний</option>
										<option value="задний">Задний</option>
										<option value="полноприводный">Полноприводный</option>							
									</select><br /><br />
							Максимальная скорость, км/час: <input type="text" name="maxspeed" /><br /><br />
							Разгон до 100 км/час, с: <input type="text" name="razgon" /><br /><br />
							Фото: <input type="file" name="userfile" /><br /><br><br />
							<br><br />
							<input style="position: relative; left: 80%;" type="submit" name="add" value="Добавить" />
						</form>
					</div>
			</div>

				<br>
	</div>
</div>

<?php

if(isset($_GET['marka'])) $marka = $_GET['marka'];

if (!isset($marka)) {
		$query = "SELECT * FROM car_model";
		if ($result = mysqli_query($link, $query)) 
		{	
			echo "<p style='font-size: 16px; color: #5A5454;'>Авто</p>";								
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				echo "<a href='index.php?page=auto&marka=".$row['id']."'>".$row['mark_name']." ".$row['model_name']."</a><br>";
			}
		}
}
else 
{		
		$query = "SELECT * FROM car_model WHERE id = ".$marka." ";
		if ($result = mysqli_query($link, $query)) 
		{
    		while ($row = mysqli_fetch_assoc($result)) 
    		{
            echo '<form method="post">
					<input type="submit"  id="editnews" value="Изменить" name="edit_id">
					<input type="submit" value="Удалить" name="delete_id"><br>';
	 		echo '	<div>
            		<center>
					<p><p style="font-family: Fira Sans; color: #838B8B;"> '.$row['mark_name'].' '.$row['model_name'].' </p></center><br>
            		<table style="margin: 0 auto; font-size: 12;" class="info">
                		<tr>
                    		<td class="name" colspan="2">Кузов и габариты <text>'.$row['mark_name'].' '.$row['model_name'].'</text>: </td>
                		</tr>
                
                		<tr >
                    		<td class="har">Тип кузова</td>
                    		<td class="har2">'.$row["cuzovtype"].'</td>
                		</tr>
                
                		<tr>
                    		<td class="har">Количество мест</td>
                    		<td class="har2">'.$row["kolmest"].'</td>
                		</tr>
                
                		<tr>
                		    <td class="har">Количество дверей</td>
                		    <td class="har2">'.$row["koldver"].'</td>
                		</tr>
    
               			<tr>
                   			<td class="har">Длина, мм</td>
                   			<td class="har2">'.$row["dlina"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Ширина, мм</td>
                    		<td class="har2">'.$row["wirina"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Высота, мм</td>
                    		<td class="har2">'.$row["visota"].'</td>
                		</tr>
    
                		<tr>
                    		<td colspan="2" class="name">Двигатель и топливо <text>'.$row['mark_name'].' '.$row['model_name'].'</text>: </td>
                		</tr>
    
                		<tr>
                    		<td class="har">Тип двигателя</td>
                    		<td class="har2">'.$row["typedvig"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Объем двигателя, куб. см</td>
                    		<td class="har2">'.$row["obdvig"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Мощность, л.с./об мин</td>
                    		<td class="har2">'.$row["moshnost"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Крутящий момент, Нм/об мин</td>
                    		<td class="har2">'.$row["krutmoment"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Расположение двигателя</td>
                    		<td class="har2">'.$row["dvigsite"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Тип топлива</td>
                    		<td class="har2">'.$row["typetop"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Расход, л на 100 км</td>
                    		<td class="har2">'.$row["rashod"].'</td>
                		</tr>
    
                		<tr>
                    		<td class="har">Клапанов на цилиндр</td>
                    		<td class="har2">'.$row["klapan"].'</td>
                		</tr>
    
                		<tr>
                    		<td colspan="2" class="name">Другие характеристики <text>'.$row['mark_name'].' '.$row['model_name'].'</text>: </td>
                		</tr>
    
                		<tr>
                    		<td class="har">Привод</td>
                    		<td class="har2">'.$row["privod"].'</td>
                		</tr>
    
                		<tr>
                		    <td class="har">Максимальная скорость, км/час</td>
                		    <td class="har2">'.$row["maxspeed"].'</td>
               			</tr>
    
                		<tr>
                    		<td class="har">Разгон до 100 км/час, с</td>
                    		<td class="har2">'.$row["razgon"].'</td>
                		</tr>
                		<br></table><br>
                		';
            echo '<div style="margin: 0 auto;" id="foto">'.image($row["photo"]).' </div><br>';
            echo "</form>";
    		}
		}


	/* ИЗМЕНИТЬ АВТО В БАЗЕ ДАННЫХ */

		if (isset($_POST['edit_id']))
		{
			echo '<div id="modaledit" style="overflow: auto; width: 700px; height: 700px; left: 20%; top: 10%; "><div onclick="clickExitEditNewsForm();" class="exiteditnews"></div>';	
					$showeditnews = "SELECT * FROM car_model WHERE id = ".$_GET['marka']." LIMIT 1";
					$resulte = mysqli_query($link, $showeditnews);
					while ($row_e = mysqli_fetch_assoc($resulte)) 
					{
						echo "<form method='post'>";
						echo "<center><h3>Корекция автомобиля</h3></center>";
						echo "<input name='id_e' type='hidden' value='".$row_e['id']."'>";
						echo "Марка: <br><input name='marka_e' type='text' value='".$row_e['mark_name']."'><br><br>";
						echo "Модель: <br><input name='model_e' type='text' value='".$row_e['model_name']."'><br><br>";
						echo "Кузов: <br><input name='cuzovtype_e' type='text' value='".$row_e['cuzovtype']."'><br><br>";
						echo "Количество мест: <br><input name='kolmest_e' type='text' value='".$row_e['kolmest']."'><br><br>";
						echo "Количество дверей: <br><input name='koldver_e' type='text' value='".$row_e['koldver']."'><br><br>";
						echo "Длина: <br><input name='dlina_e' type='text' value='".$row_e['dlina']."'><br><br>";
						echo "Ширина: <br><input name='wirina_e' type='text' value='".$row_e['wirina']."'><br><br>";
						echo "Высота: <br><input name='visota_e' type='text' value='".$row_e['visota']."'><br><br>";
						echo "Тип двигателя: <br><input name='typedvig_e' type='text' value='".$row_e['typedvig']."'><br><br>";
						echo "Обьем двигателя: <br><input name='obdvig_e' type='text' value='".$row_e['obdvig']."'><br><br>";
						echo "Мощность: <br><input name='moshnost_e' type='text' value='".$row_e['moshnost']."'><br><br>";
						echo "Крутящий момент: <br><input name='krutmoment_e' type='text' value='".$row_e['krutmoment']."'><br><br>";
						echo "Расположение двигателя: <br><input name='dvigsite_e' type='text' value='".$row_e['dvigsite']."'><br><br>";
						echo "Тип топлива: <br><input name='typetop_e' type='text' value='".$row_e['typetop']."'><br><br>";
						echo "Расход: <br><input name='rashod_e' type='text' value='".$row_e['rashod']."'><br><br>";
						echo "Количество клапанов: <br><input name='klapan_e' type='text' value='".$row_e['klapan']."'><br><br>";
						echo "Привод: <br><input name='privod_e' type='text' value='".$row_e['privod']."'><br><br>";
						echo "Максимальная скорость: <br><input name='maxspeed_e' type='text' value='".$row_e['maxspeed']."'><br><br>";
						echo "Разгон: <br><input name='razgon_e' type='text' value='".$row_e['razgon']."'><br><br>";
					    echo "<input style='position: relative; left: 88.5%;' type='submit' name='b_e' value='Изменить'>";
						echo "</form>";
   					}
  				}	

			}
			echo "</div>";	
		
		
	#Кнопка изменить в модальном окне!
		if (isset($_POST['b_e'])) 
		{
			$mark_name = $_POST['marka_e'];
			$model = $_POST['model_e'];
			$cuzovtype = $_POST['cuzovtype_e'];
			$kolmest = $_POST['kolmest_e'];
			$koldver = $_POST['koldver_e'];	
			$dlina = $_POST['dlina_e'];
			$wirina = $_POST['wirina_e'];
			$visota = $_POST['visota_e'];
			$typedvig = $_POST['typedvig_e'];
			$obdvig = $_POST['obdvig_e'];
			$moshnost = $_POST['moshnost_e'];
			$krutmoment = $_POST['krutmoment_e'];
			$dvigsite = $_POST['dvigsite_e'];
			$typetop = $_POST['typetop_e'];
			$rashod = $_POST['rashod_e'];
			$klapan = $_POST['klapan_e'];
			$privod = $_POST['privod_e'];
			$maxspeed = $_POST['maxspeed_e'];
			$razgon = $_POST['razgon_e'];
			$edit_n = "UPDATE car_model SET mark_name = '".$mark_name."', model_name = '".$model."', cuzovtype = '".$cuzovtype."', kolmest = '".$kolmest."', koldver = '".$koldver."', dlina = '".$dlina."', wirina = '".$wirina."', visota = '".$visota."', typedvig = '".$typedvig."', obdvig = '".$obdvig."', moshnost = '".$moshnost."', krutmoment = '".$krutmoment."', dvigsite = '".$dvigsite."', typetop = '".$typetop."', rashod = '".$rashod."', klapan = '".$klapan."', privod = '".$privod."', maxspeed = '".$maxspeed."', razgon = '".$razgon."'  WHERE id = '".$_GET['marka']."' LIMIT 1";
			mysqli_query($link, $edit_n); 
		}

	/* --- */	

	/* УДАЛЕНИЕ АВТО ИЗ БАЗЕ ДАННЫХ */
		
		if (isset($_POST['delete_id']))
		{
			$delete = 'DELETE FROM car_model WHERE id='.$_GET['marka'].'';
			mysqli_query($link, $delete);
			header("Location: index.php");
			exit();
	   	}

	/* --- */

?>