<?php include "header.php";
?>
<?php 
try
{
	$db = new PDO('mysql:host=localhost;dbname=accessory_skate;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());       
}
$sql = " UPDATE `users` SET 
pseudo = :pseudo,
firstname = :firstname,
lastname = :lastname,
email = :email,
age = :age,
type = :type,
password = :password 
WHERE id =:id";
$query = $db->prepare($sql);
// Bind mes paramètres où $_GET['id'] a pour flag/marqueur :id
$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$query->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$query->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
$query->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
$query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$query->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
$query->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
$query->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
// le update ne renvoie rien donc tjr false 
 if ($result === false)
	echo "<p>Le contact a été modifié</p>";
else
	echo "<p>Erreur</p>";  
?>

<a  class="btn btn-primary" href="accueil_admin.php" role = "button">Retour</a>