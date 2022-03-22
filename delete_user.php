<?php include "header.php";
?>
<?php
$sql = 'SELECT * FROM `users` WHERE id=:id';
$query = $db->prepare($sql);
// Bind mes paramètres où $_GET['id'] a pour flag/marqueur :id
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <h2> Êtes vous sur de vouloir supprimer <?php echo $user['pseudo'] ?> ? </h2>
    <form class="row g-3" method="post" action="suppression_user.php">
        <div class="col-md-0">
            <label class="form-label"></label>
            <input type="hidden" class="form-control" name="id" value="<? echo $_GET["id"] ?>">
        </div>

        <div>
            <input type="submit" class="btn btn-danger" value="Supprimer">
        </div>
    </form>
</div>
<?php include "footer.php";
?>