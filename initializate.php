<?php
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
    array_push($_SESSION['users'], new User(0, 'user','','qwerty227', new Adress('Russia','')));
    $_SESSION['id'] = 0;
}
?>