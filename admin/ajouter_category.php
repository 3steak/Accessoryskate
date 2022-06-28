<?php include "header.php";
?>

<?php
//TODO a changer quand il y aura SESSION, ici celui qui creé la cat est users_id = 4 
$users_id = 4;
$sql = "INSERT INTO `category`(`name`, `users_id`, `is_active`) 
VALUES 
(:name, :users_id, :is_active)";

$query = $db->prepare($sql);
$query->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$query->bindParam(':users_id', $users_id, PDO::PARAM_INT);
$query->bindParam(':is_active', $_POST['is_active'], PDO::PARAM_STR);

$result = $query->execute();
if ($result === true)
    echo "<p>La categorie a été ajouté</p>";
else
    echo "<p>Erreur</p>";
?>

<a class="btn btn-primary" href="accueil_admin.php" role="button">Retour</a>