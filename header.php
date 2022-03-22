<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=accessory_skate;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
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


    <h1> AccessorySkate, le site d'accessoires et gadgets dont vous avez besoin ! </h1>

    <nav>

        <!-- logo du site -->
        <h2 class="logo"><a href="index.php">AccessorySkate</a></h2>

        <!-- liste ul pour connexion deco panier et fav ( si co ) -->
        <ul class="menu">


            <!-- Connexion -->
            <li class="connexion button"><a href="#">Connexion</a></li>

            <!-- Deconnexion -->
            <li class="deconnexion button secondary"><a href="#">Deconnexion</a></li>

            <!-- Panier -->
            <li class="panier"> <a href="#">
                    <img alt="panier" src="assets/image/navbar/Panier.png" ,height=30, width=30>
                </a>
            </li>

            <!-- Favoris si connecté -->
            <li class="fav"><a href="#">Favoris</a></li>

        </ul>

    </nav>