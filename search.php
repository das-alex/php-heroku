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
            $arr = array();
            
            if(isset($_POST['search_index'])) {
                foreach($_POST as $value) {
                    $arr[] = $value;
                }
            }
        ?>
        <div class="filter_block wrapper">
            <div class="left_filter">
                <?php
                    echo "<span>Вы ищите: ".$arr[0]." c ".$arr[1]."</span>"
                ?>
            </div>
            <div class="right_filter">
                <span>Сортировка:</span>
                <span>По возрастанию</span>
                <span>По убыванию</span>
            </div>
        </div>
        <div class="search_block wrapper">
            <?php
                $query = "SELECT id,country,city,price,start_date FROM tour WHERE country='$arr[0]' and start_date>='$arr[1]'";
                $result = mysqli_query($conect, $query) or die("Ошибка чтения из БД" . mysqli_error($conect));
                
                if($result) {
                    $items = mysqli_num_rows($result);
                    for($i=0; $i<$items; $i++) {
                        $row = mysqli_fetch_row($result);
                        echo "<div class='card_search'><div><p>".$row[1].", ".$row[2]."</p><p>Заезд с ".$row[4]."</p></div><div><p>Стоимость: ".$row[3]."</p><a href='item.php?id=".$row[0]."'>подробнее</a></div></div>";
                    }
                }
            ?>
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