<?php include "header.php";
?>
<?php
$sql = " DELETE FROM `category` WHERE id =:id";
$query = $db->prepare($sql);
$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
?>
<p>La catégorie a été supprimée.</p>
<a class="btn btn-primary" href="accueil_admin.php" role="button">Retour</a>