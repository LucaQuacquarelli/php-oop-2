<?php
    class Product {
        private $name;
        private $price;
        private $description;
        private $ship_price;

        function __construct($name, $price, $description = "", $ship_price = "Free") {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->ship_price = $ship_price;
        }
}