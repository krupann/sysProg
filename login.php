<?php
require_once('User.php');
require_once('Adress.php');
session_start();

$login = $_POST['login'];
$password = $_POST['password'];
foreach($_SESSION['users'] as $user) {
    echo $user->getPassword();
    if ($user->getLogin() == $login && $user->getPassword() == $password) {
        $_SESSION['user'] = $user;
        if ($user->getID() == 0) {
            header('Location: admin_panel.php');
            die;
        }
        header('Location: info.php');
        die;
    }
}
die('Неверный логин или пароль');
?>