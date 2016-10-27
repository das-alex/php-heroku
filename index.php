<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Travel Agency</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<script>
//    $(function(){
//        $("#country").keyup(function(){
//            var search = $("#country").val();
//            $.ajax({
//                type: "POST",
//                url: "search.php",
//                data: {"country": search},
//                cache: false,                                 
//                success: function(response){
//                    $("#country").html(response);
//                }
//            });
//            return false;
//        });
//    }); 
    $( function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<body>
	<header>
		<div class="main-header wrapper">
			<a href="index.html" class="logo">TravelAgency</a>
			<nav class="menu">
				<ul>
					<li><a href="#">Новости</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</nav>
		</div>
		<div class="main-promotion wrapper">
		    <?php
                require_once "connect.php";
            
                $query1 = "SELECT picture_lrg, "
            ?>
			<h2>Lorem ipsum.</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, rem.</p>
		</div>
	</header>
	<main>
		<div class="search-place wrapper">
			<h2>Lorem ipsum dolor.</h2>
			<p>Найдите все необходимое и забронируйте путешествие своей мечты по самой низкой цене</p>
			<form action="search.php" method="post">
				<input type="text" name="country" id="country" list="country_list" autocomplete="off" placeholder="Выбирете страну">
				<datalist id="country_list">
				    <?php         
                        $query1 = "SELECT country FROM tour GROUP BY country";
                        $result = mysqli_query($conect, $query1) or die("Ошибка чтения из БД" . mysqli_error($conect));
                    
                        if($result) {
                            $rows = mysqli_num_rows($result);
                            for($i=0; $i<$rows; $i++) {
                                echo "<option>";
                                $row = mysqli_fetch_row($result);
                                for($j=0; $j<1; $j++) echo $row[$j];
                                echo "</option>";
                            }
                        }
                    ?>
				</datalist>
				<input type="text" id="datepicker" placeholder="Выбирите дату">
				<input type="submit" value="поиск">
			</form>
		</div>
		<div class="popular wrapper">
			<h3>Популярное</h3>
			<div class="row">
				<?php                    
                    $query1 = "SELECT price,country,city FROM tour WHERE orders > 150";
                    $result = mysqli_query($conect, $query1) or die("Ошибка чтения из БД" . mysqli_error($conect));

                    if($result) {
                        $rows = mysqli_num_rows($result);

                        for($i=0; $i<$rows; ++$i) {
                            echo "<div class='card'>";
                            $row = mysqli_fetch_row($result);
                            for($j=0; $j<3; ++$j) echo $row[$j];
                            echo "</div>";
                        }
                        
                        mysqli_free_result($result);
                    }
                ?>
			</div>
		</div>
		<div class="new wrapper">
			<h3>Новые предложения</h3>
			<div class="row">
				<?php        
                    $query1 = "SELECT price,country,city,picture FROM tour ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($conect, $query1) or die("Ошибка чтения из БД" . mysqli_error($conect));

                    if($result) {
                        for($i=0; $i<3; $i++) {
                            echo "<div class='card'>";
                            $row = mysqli_fetch_row($result);
                            echo "<div><img src='" . $row[3] . "' width='304' height='160'></div><h3>" . $row[1] . ", " . $row[2] . "</h3>";
                            echo "</div>";
                        }
                        mysqli_free_result($result);
                    }
                ?>
			</div>
		</div>
	</main>
	<footer>
		<div class="main-footer wrapper">
			<a href="index.html" class="logo">TravelAgency</a>
			<div class="social-buttons">
				
			</div>
			<p class="copyright">
				
			</p>
		</div>
	</footer>
</body>
</html>