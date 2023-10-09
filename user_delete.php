<?php
require_once('User.php');
require_once('Adress.php');
session_start();

if ($_SESSION['user']->getLogin() != 'user') {
    die('Вы не администратор');
}

$id = $_POST['id'];
for ($i = 1; $i <= count($_SESSION['users']); $i++) {
    if ($id == $i) {
        unset($_SESSION['users'][$i-1]);
    }
}

header('Location: admin_panel.php');
?>