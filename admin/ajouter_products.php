<?php include "header.php";
?>

<?php
//TODO a changer quand il y aura SESSION, ici celui qui creé la cat est users_id = 4 
$users_id = 4;
// 

$sql = "INSERT INTO `products`(`category_id`, `name`, `price`, `description`, `details`, `color`, `is_active`, `first_page`) 
VALUES 
(:category_id, :name, :price, :description, :details, :color, :is_active, :first_page)";

$query = $db->prepare($sql);
$query->bindParam(':category_id', $_POST['category_id'], PDO::PARAM_INT);
$query->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$query->bindParam(':price', $_POST['price'], PDO::PARAM_INT);
$query->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
$query->bindParam(':details', $_POST['details'], PDO::PARAM_STR);
$query->bindParam(':color', $_POST['color'], PDO::PARAM_STR);
$query->bindParam(':is_active', $_POST['is_active'], PDO::PARAM_INT);
$query->bindParam(':first_page', $_POST['first_page'], PDO::PARAM_INT);

$result = $query->execute();
if ($result === true)
    echo "<p>Le produit a été ajouté</p>";
else
    echo "<p>Erreur</p>";
?>

<a class="btn btn-primary" href="accueil_admin.php" role="button">Retour</a>