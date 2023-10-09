<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
require_once('Adress.php');
require_once('User.php');
session_start();

require_once('initializate.php');
?>
</head>
<body>
    
<form action="login.php" method="POST">
    <label for="login">Логин</label>
    <input type="text" name="login">
    <label for="password">Пароль</label>
    <input type="text" name="password">
    <input type="submit" value="Вход">
</form>

</body>
</html>