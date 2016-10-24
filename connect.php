<?php

    $name_bd = "cursach";
    $host = "localhost";
    $user_bd = "root";
    $pswrd = "";

    $conect = mysqli_connect($host, $user_bd, $pswrd, $name_bd); 
    mysqli_set_charset($conect, "utf8");
    
//    if(!$conect) {
//        echo "Ошибка подключения к БД";
//        exit;
//    }
//    else {
//        echo "Подключение к БД - ОК";
//    }

//    $charset = mysqli_character_set_name($conect);
//    printf ("Текущая кодировка - %s\n",$charset);

?>