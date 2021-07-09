<?php 
    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/Person.php";
    require_once __DIR__ . "/classes/Item.php";
    require_once __DIR__ . "/database/item_db.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>MY Shop</title>
    </head>
    <body>
        <?php include __DIR__ . "/partials/header.php"; ?>
        
        <main>
            <?php foreach ($items as $value) { ?>
                <div class="item">
                    <?php $item = new Item($value["name"], $value["price"], $value["description"], $value["ship_price"]); ?>
                    <img src="<?= $value['img']?>" alt="item">
                    <h2><?= $item->getName()?></h2>
                    <h3><?= $person->getDiscount($item->getPrice()) ?>&euro;</h3>
                    <p><?= $item->getDescription()?></p>
                    <h5>Costo di spedizione: <?= $item->getShipPrice() . "&euro;"?></h5>
                </div>
            <?php } ?>
        </main>
    </body>
</html>