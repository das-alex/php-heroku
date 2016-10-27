<?php
    require_once "connect.php";
    $arr = array();
    $k = 0;
    $path = "img/";
    $types = "image/jpeg";
    $size = 5024000;
    
    mysqli_set_charset($conect, "utf8");
    foreach($_POST as $value) {
//        $value = mysqli_real_escape_string($conect, $value);
//        $value = addslashes($value);
        $arr[] = $value;
        $k++;
    }

    if($_SERVER['REQUEST_METHOD']=='POST') {
        if(!in_array($_FILES['picture_sml']['type'], $types)) die("<span>Такой тип файла нельзя загружать у нас</span>");
        if($_FILES['picture_sml']['size'] > $size) die("<span>Слишком большой размер файла</span>")
    }

    $query = "INSERT INTO `tour`(`id`, `country`, `city`, `type_live`, `start_date`, `end_date`, `cnt_people`, `price`, `dscrbe`, `transport`) VALUES (NULL,'$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]',$arr[5],$arr[6],'$arr[7]','$arr[8]')";
    
//    mysqli_query($conect, $query);
    if(mysqli_query($conect, $query)) {
        printf("%d строк вставлено.\n", mysqli_affected_rows($conect));
    }

    echo $query;
    
?>