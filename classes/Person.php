<?php

class Person {
    private $name;
    private $surname;
    private $address;
    private $age;
    private $premium = false;

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

        public function getDiscount($price) {
            if ($this->age >= 60) {
                return round($price = ($price * 25) / 100, 2);
            } elseif($this->age < 18) {
                return round($price = ($price * 10) / 100, 2);
            } elseif ($this->premium) {
                return round($price = ($price * 50) / 100, 2);
            } else {
                return round($price, 2);
            }
        }
}

$person = new Person("Luca", "Quacquarelli", "Via San Martino 1F", 21);