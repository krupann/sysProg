<?php
class Adress {
    private $country;
    private $city;
    function __construct($country,$city) {
        $this->country = $country;
        $this->city = $city;
    }
    function getCountry() { return $this->country; }
    function getCity() { return $this->city; }
}
?>