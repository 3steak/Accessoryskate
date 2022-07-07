<?php
include "module/home/controler_category.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/navbar.css" />
    <link rel="stylesheet" href="CSS/footer.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AccessorySkate</title>
    <link rel="icon" type="image/png" href="assets/image/bits.png" />
</head>

<body>
    <div id="bar">JE SUIS LA BAR</div>
    <header>
        <div>
            <a href="index.php">
                <img id="logo" src="assets/image/header/logo.png">
            </a>
        </div>
        <nav>

            <ul class="menu">

                <?php
                $home = new HomeControler;

                foreach ($home->categories as $category) { ?>
                    <li><?= $category['name']; ?></li>
                <?php
                };

                ?>


            </ul>
        </nav>
        <div id="espaceperso">
            <ul class="comptepanier">
                <li>
                    <!--<a href=""></a> !-->
                    <img src="assets/image/header/logovotrecompte.png">
                </li>
                <li>
                    <!--<a href=""></a> !-->
                    <img src="assets/image/header/logopanier.png">
                </li>
            </ul>
        </div>
    </header>

    <div id="divphotoaccueil">
        <img id="photoaccueil" src="assets/image/header/photoaccueil.png">
        <h1>ACCESSORY SKATE</h1>
        <h2>LE SITE D’ACCESSOIRES & GADGETS DONT VOUS AVEZ BESOIN</h2>
    </div>


</body>