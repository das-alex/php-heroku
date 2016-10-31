<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BUY tour</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="card_approving_buy">
        <div class="head_card_approving">
            <h1>Покупка тура</h1>
            <?php
                require_once "connect.php";
                
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT country,city,price FROM tour WHERE id=".$id;
                    $result = mysqli_query($conect, $query) or die("Ошибка чтения из БД" . mysqli_error($conect));

                    if($result) {
                        $row = mysqli_fetch_row($result);
                        echo "<p>Вы выбрали: ".$row[0].", ".$row[1]."</p>";

                    }else echo "Есть проблемка";
                }else echo "Нет такой страници";
            ?>
        </div>
        <div class="body_card_approving">
            <form action="add_record.php" method="post">
                <ul>
                    <li><label for="fio">Ф.И.О.</label><input name="fio" type="text"></li>
                    <li><label for="pswd">Пароль</label><input name="pswd" type="password"></li>
                    <li><label for="email">E-mail</label><input name="email" type="email"></li>
                    <li><label for="phone">Телефон</label><input name="phone" type="text"></li>
                    <li><label for="adress">Адрес</label><input name="adress" type="text"></li>
                    <li><label for="passport">Серия и номер паспорта</label><input name="passport" type="text"></li>
                </ul>
                <?php
                    echo "<span>Цена: ".$row[2]."$</span>";
                ?>
                <input name="submit" type="submit" value="Отправить">
            </form>
        </div>
    </div>
</body>
</html>