<meta charset="utf-8">
<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!


    //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['login_name_in'])) 
    { 
        $login_name_in = $_POST['login_name_in'];
        if ($login_name_in == '') 
        { 
            unset($login_name_in);
        } 
    }


    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['passw_in'])) 
    {
        $passw_in=$_POST['passw_in'];
        if ($passw_in =='') 
        { 
            unset($passw_in);
        } 
    }


    //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    if (empty($login_name_in) or empty($passw_in))
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }


    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login_name_in = stripslashes($login_name_in);
    $login_name_in = htmlspecialchars($login_name_in);
    $passw_in = stripslashes($passw_in);
    $passw_in = htmlspecialchars($passw_in);

    //удаляем лишние пробелы
    $login_name_reg = trim($login_name_in);
    $passw_reg = trim($passw_in);

    // подключаемся к базе
    include ("../includes/connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
    $result = mysqli_query($link, "SELECT * FROM users WHERE login='$login_name_in'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_assoc($result);
    if (empty($myrow['password']))
    {
        exit ("Извините, введённый вами login или пароль неверный.");
    }
    else 
    {
        if ($myrow['password']==$passw_in) 
        {
            //если пароли совпадают, то запускаем пользователю сессию
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
            header("Location: ../index.php?page=news");
        }
        else 
        {
            //если пароли не сошлись
            exit ("Извините, введённый вами login или пароль неверный.");
        }
    }
?>