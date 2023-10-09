<?php
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
    array_push($_SESSION['users'], new User(0, 'user','','qwerty1234', new Adress('','')));
    $_SESSION['id'] = 0;
}
?>