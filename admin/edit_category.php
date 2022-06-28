<?php include "header.php";
?>
<?php
// a changer quand il y aura $SESSION
// On paramètre ici 

$sql = 'SELECT * FROM `category` WHERE id=:id';
$query = $db->prepare($sql);
// Bind mes paramètres où $_GET['id'] a pour flag/marqueur :id
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
$categorie = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <h2> Détails de la categorie</h2>
    <form class="row g-3" method="post" action="modifier_category.php">
        <div class="col-md-0">
            <label class="form-label"></label>
            <input type="hidden" class="form-control" name="id" value="<? echo $_GET["id"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<? echo $categorie["name"] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Is Active</label>
            <select id="inputState" class="form-select" name="is_active">

                <option value="1" <?php if ($categorie['is_active'] == 1)
                                        echo "selected"; ?>>oui</option>
                <option value="0" <?php if ($categorie['is_active'] == 0)
                                        echo "selected"; ?>>non</option>

            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Modifier">
        </div>
    </form>
</div>
<?php include "footer.php";
?>