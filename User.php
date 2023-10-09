<?php
class User {
    private $id;
    private $login;
    private $age;
    private $password;
    private $adress;
    function __construct($id, $login,$age,$password,$adress) {
        $this->id = $id;
        $this->login = $login;
        $this->age = $age;
        $this->password = $password;
        $this->adress = $adress;
    }
    function getID() {
        return $this->id;
    }
    function getLogin() {
        return $this->login;
    }
    function getPassword() {
        return $this->password;
    }
    function getAge() {
        return $this->age;
    }
    function getAdress() {
        return $this->adress;
    }
}
?>