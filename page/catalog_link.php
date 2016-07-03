<title>Каталог - WikiCar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/tableinfo.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">

<?php

if(isset($_GET['marka'])) $marka = $_GET['marka'];

if (!isset($marka)) { 
	//* ССЫЛКИ НА МАРКИ *//
    echo "<a href='index.php?page=news'><img src='img/back.png' width='30px'></a>";
	echo "<div class='marknames'>";
	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'A%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>A</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'B%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>B</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'C%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>C</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'D%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>D</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'F%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>F</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'H%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>H</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'I%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>I</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'J%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>J</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";


	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'K%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>K</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<br>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'L%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>L</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'M%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>M</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'N%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>N</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'O%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>O</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'P%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>P</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'R%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>R</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'S%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>S</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'T%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>T</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";

	echo "<div class='marknamesblock'>";
	$query = "SELECT * FROM mark WHERE mark_name LIKE 'V%' ";
	if ($result = mysqli_query($link, $query)) 
	{
		echo "<text style='color: #5A5454; font-size: 24; font-family: Fira Sans;'>V</text><br><br>";
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo "<a href='index.php?page=cataloglink&marka=".$row['id']."'>".$row['mark_name']."</a><br>";
    	}
    	mysqli_free_result($result);
	}
	echo "</div>";
	echo "</div>";
}
else	
{
	if(isset($_GET['model'])) $model = $_GET['model'];
	if (!isset($model)) 
	{ 	
		echo "<div class='modellinks'>";
        echo "<a href='index.php?page=cataloglink'><img src='img/back.png' width='30px'></a>";
		echo "<p style='font-weight: bold; font-size: 20; color: #5A5454;'>Модели авто: </p>";
		$query = "SELECT * FROM car_model WHERE marka_id = ".$marka."";
		if ($result = mysqli_query($link, $query)) 
		{
    		while ($row = mysqli_fetch_assoc($result)) 
    		{
        		echo ("<a href='index.php?page=cataloglink&marka=".$marka."&model=".$row["id"]."'>". $row["model_name"]."</a><br>");
    		}
    		mysqli_free_result($result);
		}
		echo "</div>";
	}
	else 
	{		
		$model = $_GET['model'];
		$query = "SELECT * FROM car_model WHERE id = ".$model." ";
		if ($result = mysqli_query($link, $query)) 
		{
    		while ($row = mysqli_fetch_assoc($result)) 
    		{
            echo '<a href="index.php?page=cataloglink&marka='.$marka.'"><img src="img/back.png" width="30px"></a></div>'; 
	 		echo '
            		<center>
					<p style="font-weight: bold;"><p style="font-family: Fira Sans; font-size: 20; font-weight: bold; color: #5a5454;"> '.$row['mark_name'].' '.$row['model_name'].' </p></center><br><br><br>
					<p style="font-family: Fira Sans; font-size: 14; font-weight: bold; color: #5A5454;">Характеристики авто:</p>
            		<table class="info">
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
                		<br></table><br>';
                echo '<text style="font-family: Fira Sans; font-size: 14; font-weight: bold; color: #5A5454;">Фото:</text><br><br>';
                echo '<div id="foto">'.image($row["photo"]).' </div><br>';
    		}
    mysqli_free_result($result);
		}

	}
			
}

?>	