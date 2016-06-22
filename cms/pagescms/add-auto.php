<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="../../css/pagescms.css">
		<link href="../../css/hover.css" rel="stylesheet" media="all">
		<link rel="shortcut icon" href="../../img/adminfavi.png" type="image/png">
		<link href='https://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
		<title>Добавить авто | Admin Panel | WikiCar </title>
	</head>
	<body class="body">
	<center>
	<div class="pic"><img title="WikiCar" src="../../img/logo_converted.png" width="150"></div>
	<div class="navigation">
		<div class="header-menu">
			<ul class="nav">
				<li><a href="add-auto.php">Добавить авто</a></li>
				<li><a href="add-news.php">Добавить новость</a></li>
				<li><a href="../login.php"><img src="../../img/out.png" width="20"></a></li>
			</ul>
		</div>
	</div>
		</center>
<?php
header( 'Content-Type: text/html; charset=utf-8' );
	include ("../../includes/connect.php");
			
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
						
						
						
						
						
					$uploaddir = '../../img/';
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
					else {
						header('location ../admin.php');
						exit();
					}
				}
			
?>

	<div class="add">
			<br>
			<div class="udob">
				<form method="post" action="add-auto.php" enctype=multipart/form-data>
					Марка: <select name="mark">
							<option> --- Выберите марку --- </option>
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
							</select><br />
					Марка: <select name="mark_name">
							<option> --- Выберите марку --- </option>
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
							</select><br />
					Модель: <input type="text" name="model" /><br /><hr />
					Тип кузова: <select name="cuzovtype">
									<option> --- Выберите кузов --- </option>
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
								</select><br />
					Количество мест: <input type="text" name="kolmest" /><br />
					Количество дверей: <input type="text" name="koldver" /><br />
					Длина, мм: <input type="text" name="dlina" /><br />
					Ширина, мм: <input type="text" name="wirina" /><br />
					Высота, мм: <input type="text" name="visota" /><br /><hr />
					Тип двигателя: <input type="text" name="typedvig" /><br />
					Обьем двигателя, куб. см: <input type="text" name="obdvig" /><br />
					Мощность, л.с./об мин: <input type="text" name="moshnost" /><br />
					Крутящий момент, Нм/об мин: <input type="text" name="krutmoment" /><br />
					Расположение двигателя: <select name="dvigsite">
												<option> --- Выберите расположение двигателя --- </option>
												<option value="сзади">сзади</option>
												<option value="спереди">спереди</option>
												<option value="центрально">центрально</option>
											</select><br />
					Тип топлива: <select name="typetop">
									<option value=""> --- Выберите тип топлива --- </option>
									<option value="бензин">бензин</option>
									<option value="дизель">дизель</option>
								</select><br />
					Расход, л на 100 км: <input type="text" name="rashod" /><br />
					Клапанов на цилиндр: <input type="text" name="klapan" /><br /><hr />
					Привод: <select name="privod">
								<option> --- Выберите привод --- </option>
								<option value="передний">Передний</option>
								<option value="задний">Задний</option>
								<option value="полноприводный">Полноприводный</option>							
							</select><br />
					Максимальная скорость, км/час: <input type="text" name="maxspeed" /><br />
					Разгон до 100 км/час, с: <input type="text" name="razgon" /><br />
					Фото: <input type="file" name="userfile" /><br />
					<br>
					<input style="position: relative; left: 80%;" type="submit" location.href='C:\Apache24\htdocs\diplom\cms/admin.php' name="add" value="Добавить" />
				</form>
			</div>
	</div>

		<br>
	</body>
</html>