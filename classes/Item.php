<?php
    class Item {
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

        public function getName() {
            return $this->name;
        }
    
        public function getPrice() {
            return $this->price;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getShipPrice() {
            return $this->ship_price;
        }

    }