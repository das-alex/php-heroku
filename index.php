<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Travel Agency</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
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
			<h2>Lorem ipsum.</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, rem.</p>
		</div>
	</header>
	<?php
    
        require_once "conect.php";
        $query = "SELECT * FROM clients";
    
        $result = mysqli_query($conect, $query) or die("Ошибка чтения из БД" . mysqli_error($conect));
    
        if($result) {
            
            $rows = mysqli_num_rows($result);
            
            echo "<ul>";
            for($i=0; $i<$rows; ++$i) {
                $row = mysqli_fetch_row($result);
                
                for($j=0; $j<7; ++$j) echo "<li>".$row[$j]."</li>";        
            }
            echo "</ul>";
            mysqli_free_result($result);
        }
        mysqli_close($conect);
    
    ?>
	<main>
		<div class="search-place wrapper">
			<h2>Lorem ipsum dolor.</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, ipsum?</p>
			<form action="">
				<input type="text" placeholder="Выбирете страну">
				<input type="text" placeholder="Взрослые">
				<input type="text" placeholder="Дети">
				<input type="submit" value="поиск">
			</form>
		</div>
		<div class="popular wrapper">
			<h3>Популярное</h3>
			<div class="row">
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
			</div>
		</div>
		<div class="new wrapper">
			<h3>Новые предложения</h3>
			<div class="row">
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
				<div class="card">
					
				</div>
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