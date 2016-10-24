<?php
    require_once "connect.php";
	$search = $_POST['country'];
    $query = mysqli_query($conect, "SELECT * FROM tour WHERE country LIKE '%". $search ."%'");
    
    if($search == ''){
        exit("Начните вводить запрос");
    }

    if(mysqli_num_rows($query) > 0) {
       $sql = mysqli_fetch_array($query);
       do {
         echo "<option>".$sql['country']."</option>";
       } while($sql = mysqli_fetch_array($query));
    }else{
       echo "Нет результатов";
    }
?>