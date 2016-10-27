<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin page</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<script>
</script>
<body>
    <div class="header_admin">
        <div class="left_admin">
            <nav class="menu">
                <ul>
                    <li><a href="">Добавить</a></li>
                    <li><a href="">Заказы</a></li>
                    <li><a href="">Просмотр</a></li>
                </ul>
            </nav>
        </div>
        <div class="right_admin">
            <a href="">Выход</a>
        </div>
    </div>
    <div class="main_admin">
        <div class="left_menu">
            <ul>
                <li><a href="?1">Добавить новый тур</a></li>
                <li><a href="?2">Добавить Новость</a></li>
                <li><a href="?3">Добавить обложку</a></li>
            </ul>
        </div>
        <div class="right_form">
           <?php
                if(isset($_GET['1'])) { require "add.php"; }  
            ?>
        </div>
    </div>
</body>
</html>