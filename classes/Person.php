<?php

class Person {
    private $name;
    private $surname;
    private $address;
    private $age;

    function __construct($name, $surname, $address, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->age = $age;
    }

    public function getFullname() {
        return $this->name . " " . $this->surname;
    }

    public function getAge() {
        return $this->age;
    }
}