<?php

    //Инициализация констант для соединения с базой данных
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'blog');
    //Подключаемся к базе
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    //Проверка на ошибки
    if(mysqli_connect_errno()) {
        echo 'Ошибка соединения с MySQL серверром ('. mysqli_connect_errno() .'): '. mysqli_connect_error();
        exit();
    }
?>