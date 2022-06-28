<?php include "header.php";
?>
<?php
$sql = " UPDATE `products` SET 
name = :name,
category_id = :category_id,
price = :price,
description = :description,
details = :details,
color = :color,
is_active = :is_active,
first_page = :first_page

WHERE id =:id";
$query = $db->prepare($sql);
// Bind mes paramètres où $_GET['id'] a pour flag/marqueur :id
$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$query->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$query->bindParam(':category_id', $_POST['category_id'], PDO::PARAM_INT);
$query->bindParam(':price', $_POST['price'], PDO::PARAM_INT);
$query->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
$query->bindParam(':details', $_POST['details'], PDO::PARAM_STR);
$query->bindParam(':color', $_POST['color'], PDO::PARAM_STR);
$query->bindParam(':is_active', $_POST['is_active'], PDO::PARAM_INT);
$query->bindParam(':first_page', $_POST['first_page'], PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
// le update ne renvoie rien donc tjr false 
if ($result === false)
    echo "<p> Le produit a été modifié</p>";
else
    echo "<p>Erreur</p>";
?>

<a class="btn btn-primary" href="accueil_admin.php" role="button">Retour</a>