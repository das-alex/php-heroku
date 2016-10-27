<?php
    require_once "connect.php";
    $arr = array();
    $k = 0;
    $path = "img/";
    $ext = array_pop(explode('.',$_FILES['picture']['name']));
    $new_name = time().'.'.$ext;
    $full_path = $path.$new_name;
    
    mysqli_set_charset($conect, "utf8");
    foreach($_POST as $value) {
//        $value = mysqli_real_escape_string($conect, $value);
//        $value = addslashes($value);
        $arr[] = $value;
        $k++;
    }

    if($_FILES['picture']['error'] == 0) {
        if(move_uploaded_file($_FILES['picture']['tmp_name'], $full_path)) {
            $picture = $full_path;
        }
    }

    $query = "INSERT INTO `tour`(`id`, `country`, `city`, `type_live`, `start_date`, `end_date`, `cnt_people`, `price`, `dscrbe`, `transport`, `picture`) VALUES (NULL,'$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]',$arr[5],$arr[6],'$arr[7]','$arr[8]','$picture')";
    
//    mysqli_query($conect, $query);
    if(mysqli_query($conect, $query)) {
        printf("%d строк вставлено.\n", mysqli_affected_rows($conect));
    }

    echo $query;
    
?>