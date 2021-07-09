<?php

require_once __DIR__ . "/../classes/Item.php";

$items = [
    [
        "name" => "Vans Spicoli 4 Shades, Occhiali da Sole Uomo ",
        "price" => "15,00",
        "description" => "Colore:Nero (Black) Lifestyle occhiali da sole da uomo.",
        "ship_price" => "6",
    ],
    [
        "name" => "Tommy Hilfiger Tommy Flag Hilfiger Tee Maglietta Sport Uomo",
        "price" => "49,00",
        "description" => "Grazie al design classico del logo e alla scollatura comoda, la T-shirt in cotone biologico è un must have per i tuoi look casual. ",
        "ship_price" => "Free",
    ],
    [
        "name" => "New Era Manchester United 9forty Adjustable cap Mu25 Edition ",
        "price" => "39,99",
        "description" => "Baseball Cap - berretti da baseball Official licensed product 100% Cotone",
        "ship_price" => "2,99",
    ]
];

$item = new Item($items["name"],$items["price"],$items["description"],$items["ship_price"]);