<html>
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="../../css/pagescms.css">
		<link href="../../css/hover.css" rel="stylesheet" media="all">
		<link href='https://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
		<title>Изменить авто | Admin Panel | WikiCar </title>
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
	$link = mysqli_connect("localhost", "root", "root", "diplomauto");
		if (mysqli_connect_errno()) {
					echo "Не подключились!";
		}

		mysqli_select_db($link, "diplomauto");

		$result = (" SELECT mark, model, cuzovtype, kolmest, koldver, dlina, wirina, visota, typedvig, obdvig, moshnost, krutmoment, dvigsite, typetop, rashod, klapan, privod, maxspeed, razgon FROM acura WHERE id='5' ");

		if(! mysqli_query($link, $result))
					{
    					echo(mysqli_error($link));
					}

		$row = mysqli_fetch_assoc();



			if(isset($_POST["add"])){ 
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

					$insert_sql = "INSERT INTO ".$_POST['marka']." (mark, model, cuzovtype, kolmest, koldver, dlina, wirina, visota, typedvig, obdvig, moshnost, krutmoment, dvigsite, typetop, rashod, klapan, privod, maxspeed, razgon) VALUES ('{$mark}' , '{$model}' , '{$cuzovtype}', '{$kolmest}', '{$koldver}', '{$dlina}', '{$wirina}', '{$visota}', '{$typedvig}', '{$obdvig}', '{$moshnost}', '{$krutmoment}', '{$dvigsite}', '{$typetop}', '{$rashod}', '{$klapan}', '{$privod}', '{$maxspeed}', '{$razgon}')";
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
				<form method="post" action="update-auto.php">
					Марка: <select name="marka">
							<option> --- Выберите авто --- </option>
							<option value="accars">AC Cars</option>
							<option value="acura">Acura</option>
							<option value="alfaromeo">Alfa_Romeo</option>
							<option value="astonmartin">Aston Martin</option>
							<option value="audi">Audi</option>
							<option value="bentley">Bentley</option>
							<option value="bmw">BMW</option>
							<option value="bugatti">Bugatti</option>
							<option value="cadillac">Cadillac</option>
							<option value="chevrolet">Chevrolet</option>
							<option value="chrysler">Chrysler</option>
							<option value="citroen">Citroen</option>
							<option value="dacia">Dacia</option>
							<option value="dodge">Dodge</option>
							<option value="ferrari">Ferrari</option>
							<option value="fiat">Fiat</option>
							<option value="ford">Ford</option>
							<option value="honda">Honda</option>
							<option value="hummer">Hummer</option>
							<option value="hyundai">Hyundai</option>
							<option value="infiniti">Infiniti</option>
							<option value="jaquar">Jaquar</option>
							<option value="jeep">Jeep</option>
							<option value="kia">Kia</option>
							<option value="lada">Lada</option>
							<option value="lamborqhini">Lamborqhini</option>
							<option value="lancia">Lancia</option>
							<option value="lexus">Lexus</option>
							<option value="lincoln">Lincoln</option>
							<option value="lotus">Lotus</option>
							<option value="maserati">Maserati</option>
							<option value="maybach">Maybach</option>
							<option value="mazda">Mazda</option>
							<option value="mclaren">Mclaren</option>
							<option value="mercedesbenz">Mercedes-Benz</option>
							<option value="mini">Mini</option>
							<option value="mitsubishi">Mitsubishi</option>
							<option value="nissan">Nissan</option>
							<option value="opel">Opel</option>
							<option value="peugeot">Peugeot</option>
							<option value="porsche">Porsche</option>
							<option value="renault">Renault</option>
							<option value="rover">Rover</option>
							<option value="saab">Saab</option>
							<option value="seat">Seat</option>
							<option value="skoda">Skoda</option>
							<option value="smart">Smart</option>
							<option value="subaru">Subaru</option>
							<option value="suzuki">Suzuki</option>
							<option value="toyota">Toyota</option>
							<option value="volkswagen">Volkswagen</option>
							<option value="volvo">Volvo</option>
							</select><br />
					Марка(для таблицы): <select name="mark">
							<option> --- Выберите марку --- </option>
							<option value="AC Cars">AC Cars</option>
							<option value="Acura">Acura</option>
							<option value="Alfa Romeo">Alfa Romeo</option>
							<option value="Aston Martin">Aston Martin</option>
							<option value="Audi">Audi</option>
							<option value="Bentley">Bentley</option>
							<option value="BMW">BMW</option>
							<option value="Bugatti">Bugatti</option>
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
							<option value="Mclaren">Mclaren</option>
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
					Модель: <input type="text" name="model" value="<?php echo $row['model'] ?>" /><br /><hr />
					Тип кузова: <select name="cuzovtype">
									<option> --- Выберите кузов --- </option>
									<option value="Седан">Седан</option>
									<option value="Универсал">Универсал</option>
									<option value="Хетчбэк">Хетчбэк</option>
									<option value="Купе">Купе</option>
									<option value="Лимузин">Лимузин</option>
									<option value="Микроавтобус">Микроавтобус</option>
									<option value="Минивэн">Минивэн</option>
									<option value="Кабриолет">Кабриолет</option>
									<option value="Фаэтон">Фаэтон</option>
									<option value="Спайдер">Спайдер</option>
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
												<option value="Сзади">Сзади</option>
												<option value="Спереди">Спереди</option>
											</select><br />
					Тип топлива: <select name="typetop">
									<option value=""> --- Выберите тип топлива --- </option>
									<option value="Бензин">Бензин</option>
									<option value="Дизель">Дизель</option>
								</select><br />
					Расход, л на 100 км: <input type="text" name="rashod" /><br />
					Клапанов на цилиндр: <input type="text" name="klapan" /><br /><hr />
					Привод: <select name="privod">
								<option> --- Выберите привод --- </option>
								<option value="Передний">Передний</option>
								<option value="Задний">Задний</option>
								<option value="Полноприводный">Полноприводный</option>							
							</select><br />
					Максимальная скорость, км/час: <input type="text" name="maxspeed" /><br />
					Разгон до 100 км/час, с: <input type="text" name="razgon" /><br />
					<br>
					<input style="position: relative; left: 80%;" type="submit" location.href='C:\Apache24\htdocs\diplom\cms/admin.php' name="save" value="Сохранить" />
				</form>
			</div>
	</div>

		<br>
	</body>
</html>