<meta charset="utf-8">
<?php

    if (isset($_POST['login_name_reg'])) 
    {
        $login_name_reg = $_POST['login_name_reg'];
        if ($login_name_reg == '') 
        {
            unset($login_name_reg);
        }
    } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    

    if (isset($_POST['passw_reg'])) 
    { 
        $passw_reg = $_POST['passw_reg']; 
        if ($passw_reg =='') 
        { 
            unset($passw_reg);
        } 
    }


    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (empty($login_name_reg) or empty($passw_reg)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login_name_reg = stripslashes($login_name_reg);
    $login_name_reg = htmlspecialchars($login_name_reg);
    $passw_reg = stripslashes($passw_reg);
    $passw_reg = htmlspecialchars($passw_reg);

    //удаляем лишние пробелы
    $login_name_reg = trim($login_name_reg);
    $passw_reg = trim($passw_reg);

    // подключаемся к базе
    include ("../includes/connect.php");

    $result = mysqli_query($link, "SELECT id FROM users WHERE login='$login_name_reg'");
    $myrow = mysqli_fetch_assoc($result);
    if (!empty($myrow['id'])) 
    {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    // если такого нет, то сохраняем данные
    $result2 = mysqli_query($link, "INSERT INTO users (login,password) VALUES('$login_name_reg','$passw_reg')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
        echo "<div style='margin: 0 auto; width: 400px;  padding: 10px; background: #abfda0;'>Вы успешно зарегистрированы!<br>Браузер сделает переадресацию через 5 секунд ... </div>";
        header( 'Refresh: 5; url=../index.php?page=news' );
    }
    else 
    {
        echo "Ошибка! Вы не зарегистрированы.";
    }
?>