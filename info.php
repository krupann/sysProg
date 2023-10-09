<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
require_once('User.php');
require_once('Adress.php');
session_start();

$user = $_SESSION['user'];
$adress = $user->getAdress();
?>
</head>
<body>
    <ul>
        <li>Логин: <?php echo $user->getLogin() ?></li>
        <li>Пароль: <?php echo $user->getPassword() ?></li>
        <li>Возраст: <?php echo $user->getAge() ?></li>
        <li>Страна: <?php echo $adress->getCountry() ?></li>
        <li>Город: <?php echo $adress->getCity() ?></li>
    </ul>
    <a href="index.php"><button>Назад</button></a>
</body>
</html>