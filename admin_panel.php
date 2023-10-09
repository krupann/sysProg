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

    
    if ($_SESSION['user']->getID() != 0) {
        die('Вы не администратор');
    }
    ?>
</head>
<body>
<a href="index.php"><button>Назад</button></a>
<form action="user_add.php" method="POST">
    <h2>Зарегестрировать пользователя</h2>
    <label for="login">Логин</label>
    <input type="text" name="login">
    <label for="password">Пароль</label>
    <input type="text" name="password">
    <label for="age">Возраст</label>
    <input type="text" name="age">
    <label for="country">Страна проживания</label>
    <input type="text" name="country">
    <label for="city">Город</label>
    <input type="text" name="city">
    <input type="submit" value="Добавить">
</form>
<form action="user_delete.php" method="POST">
    <h2>Удалить</h2>
    <label for="id">ID пользователя</label>
    <input type="text" name="id">
    <input type="submit" value="Удалить">
</form>
<h2>Список пользователей</h2>

<?php
foreach ($_SESSION['users'] as $user) {
    echo '<p>' . $user->getID() . ' - '. $user->getLogin() . ' - ' . $user->getAdress()->getCountry() . '</p>';
}
?>


</body>
</html>