<?php include "header.php";
?>

<?php
$sql = "INSERT INTO `users`(`pseudo`, `firstname`, `password`, `type`,  `lastname`, `age`, `email`) 
VALUES 
(:pseudo, :firstname, :password, :type, :lastname, :age, :email)";

$query = $db->prepare($sql);
$query->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$query->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
$query->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
$query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$query->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
$query->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
$query->bindParam(':password', $_POST['password'], PDO::PARAM_STR);


$result = $query->execute();
if ($result === true)
	echo "<p>Le contact a été ajouté</p>";
else
	echo "<p>Erreur</p>";
?>

<a class="btn btn-primary" href="accueil_admin.php" role="button">Retour</a>