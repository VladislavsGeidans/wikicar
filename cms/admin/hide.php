<meta charset="utf-8">
<?php

  Error_Reporting(E_ALL & ~E_NOTICE); 

  // Устанавливаем соединение с базой данных
  require_once("../config.php");

  // Проверяем параметр id_news, предотвращая SQL-инъекцию
  if(!preg_match("|^[\d]+$|",$_GET['id_news'])) puterror("Ошибка при обращении к блоку новостей");
  // Скрываем новость
  $query = "UPDATE news SET hide='hide' 
            WHERE id_news=".$_GET['id_news'];
  if(mysql_query($query)) header("Location: index.php?page=".$_GET['page']);
  else puterror("Ошибка при обращении к блоку новостей");
?>