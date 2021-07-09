<?php require_once __DIR__ . "/../classes/User.php"; 
    $user = new User("n0t_luc4.31", "LQ", "luca@email.it", "1234");
    $person = new Person("Luca", "Quacquarelli", "Via San Martino 1F", 21);
?>

<header>
    <div class="logo-container">
        <img src="img/amazon-logo.png" alt="logo">
    </div>
    <div class="user-container">
        <span><?= $user->getUsername(); ?></span>
        <div class="user-icon"><?= $user->getInit(); ?>
            <div class="info">
                <ul>
                    <li><?= $person->getFullname() . " " . "(".$person->getAge().")"; ?></li>
                    <li><?= $user->getEmail(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</header>