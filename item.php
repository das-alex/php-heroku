<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Travel Agency</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="item_no_pic">
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
	</header>
	<main>
        <?php
            require_once "connect.php";
            
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM tour WHERE id=".$id;
                $result = mysqli_query($conect, $query) or die("Ошибка чтения из БД" . mysqli_error($conect));
                
                if($result) {
                    
                    $row = mysqli_fetch_row($result);
                    echo "<div class='head_item wrapper'><img src='".$row[12]."' width='940' height='370'></div><div class='body_item wrapper'><div class='body_item_left'><h1>".$row[1].", ".$row[2]."</h1><p>".$row[8]."</p><p>Проживание: ".$row[3]."</p><p>Дата заезда: ".$row[4]." - ".$row[5]."</p><p>Количество людей: ".$row[6]."</p><p>Тип транспорта: ".$row[9]."</p></div><div class='body_item_right'>123</div><div class='body_item_bottom'><span>просмотров: ".$row[10]."</span><a href='".."'></a></div>";
                    echo "</div>";
                        
                }else echo "Есть проблемка";
            }else echo "Нет такой страници";
 
        ?>           
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