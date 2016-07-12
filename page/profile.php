<meta charset="utf-8">

<?php
	$query = "SELECT * FROM users WHERE id = ".$_SESSION['id']." ";
	if ($result = mysqli_query($link, $query)) 
	{
    	while ($row = mysqli_fetch_assoc($result)) 
    	{
        	echo '<div class="profile_name"><text style="color: #5A5454;">Мой профиль: <text style="font-weight: bold;">'.$row['name'].' '.$row['surname'].' ('.$_SESSION['login'].')</text></text></div><br><hr style="border: 1px solid #F1F1F1;">';
        	echo '<p style="font-size: 16px; color: #5A5454; text-decoration: underline;">Личная информация </p><br>';
        	echo '<p style="font-size: 14px;"><text style="color: #5A5454;">Логин: </text>'.$row['login'].'</p>';
        	echo '<p style="font-size: 14px;"><text style="color: #5A5454;">Страна: </text>'.$row['country'].'</p>';
        	echo '<p style="font-size: 14px;"><text style="color: #5A5454;">Город: </text>'.$row['city'].'</p>';

    	}
    	mysqli_free_result($result);
	}
?>