<?php
require_once('User.php');
require_once('Adress.php');
session_start();

if ($_SESSION['user']->getID() != 0) {
    die('Вы не администратор');
}

foreach ($_SESSION['users'] as $user) {
    if ($user->getLogin() == $_POST['login']) {
        echo '<script>alert("Логин уже занят")</script>';
        die;
    }
}

$_SESSION['id']++;
$adress = new Adress($_POST['country'],$_POST['city']);
$user = new User($_SESSION['id'],$_POST['login'],  $_POST['age'], $_POST['password'], $adress);
array_push($_SESSION['users'], $user);

header('Location: admin_panel.php');
?>