<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=accessory_skate;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());       
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>


<?php include('header.php'); ?>

<div id=body>
    HELLO ! 
</div>

<?php include('footer.php'); ?>


</html>





<?php

$usersStatement = $db->prepare('SELECT * FROM users');


?>



