<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="login_main">
        <div class="header_login">
            <h1>Кто там?</h1>
            <p>Введите логин и пароль своей учётной записи для входа в admin</p>
        </div>
        <div class="form_login">
            <form action="" method="post">
                <ul>
                    <li><label for="login">Логин:</label><input name="login" type="text"></li>
                    <li><label for="pswd">Пароль:</label><input name="pswd" type="password"></li>
                </ul>
                <a href="">Зарегестрироваться</a>
                <input name="submit" type="submit" value="войти">
            </form>
        </div>
    </div>
    <?php
        require_once "connect.php";
    
        session_start();
        if(isset($_SESSION['logon'])) {
            header("Location:admin.php");
        }
        
        if(isset($_POST['submit'])) {
            $user = $_POST['login'];
            $pass = $_POST['pswd'];
            
            $query = "SELECT name,pswd FROM users WHERE name='$user' and pswd=".$pass;
            $result = mysqli_query($conect, $query) or die("Ошибка чтения из БД " . mysqli_error($conect));
            
            if($result) {
                $_SESSION['logon']=$user;
                echo '<script type="text/javascript">window.open("admin.php","_self");</script>';
            } else {
                echo "Нет такого пользователя или неправильный пароль!";
            }
        }
    
        if(isset($_GET['signout']) == 1) {
            session_destroy();
            echo "Вы успешно вышли!";
        }
    ?>
</body>
</html>