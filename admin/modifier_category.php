<?php include "header.php";
?>
<?php
//TODO a changer quand on aura les SESSIONS, ici on dit que c'est modifié par l'admin "4"
$users_id = 4;
$sql = " UPDATE `category` SET 
name = :name,
users_id = :users_id,
is_active = :is_active

WHERE id =:id";
$query = $db->prepare($sql);
$query->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$query->bindParam(':users_id', $users_id, PDO::PARAM_STR);
$query->bindParam(':is_active', $_POST['is_active'], PDO::PARAM_INT);
// Bind mes paramètres où $_GET['id'] a pour flag/marqueur :id
$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
// le update ne renvoie rien donc tjr false 
if ($result === false)
    echo "<p>La catégorie a été modifié</p>";
else
    echo "<p>Erreur</p>";
?>

<a class="btn btn-primary" href="accueil_admin.php" role="button">Retour</a>