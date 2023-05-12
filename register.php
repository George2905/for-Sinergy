<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/CSS/main.css">
</head>
<body>

    <!--Форма Регистрации-->
    <form action="inc/signup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите имя фамилия">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>почта</label>
        <input type="email" name="email" placeholder="Введите email">
        <label>Паспортные данные</label>
        <input type="text" name="passport" placeholder="Введите паспортные данные">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение Пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button>Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
        unset($_SESSION['message']);
            ?>


    </form>


</body>
</html>