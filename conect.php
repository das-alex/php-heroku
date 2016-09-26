<?php

    $name_bd = "cursach";
    $host = "localhost";
    $user_bd = "root";
    $pswrd = "";

    $conect = mysqli_connect($host, $user_bd, $pswrd, $name_bd); 
    
    if(!$conect) {
        echo "Ошибка подключения к БД";
        exit;
    }
    else {
        echo "Подключение к БД - ОК";
    }

?>