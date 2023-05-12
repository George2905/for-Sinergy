<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $passport = $_POST['passport'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    $password = md5($password);
    $password_confirm = md5($password_confirm);


    mysqli_query($connect = "INSERT INTO `exemple-users` (`id`, `full_name`, `login`, `email`, `password`, `passport`) VALUES (' ', $full_name, $login, $email, $password, $passport)");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');


    if ($password === $password_confirm) {
        //con...
    } else  {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }



?>

