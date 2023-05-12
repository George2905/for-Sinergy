<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'php-mysql');

    if (!$connect) {
            die('Error connect to DataBase');
    }