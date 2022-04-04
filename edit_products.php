<?php include "header.php";
?>

<?php

$sql = "SELECT * FROM `products` WHERE id =:id";
$query = $db->prepare($sql);
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
$produits = $query->fetch(PDO::FETCH_ASSOC);
?>
<?
// je selectionne aussi tout de ma table category
$sql = "SELECT * FROM `category`";
$query = $db->prepare($sql);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <h2> Détails du produits</h2>
    <form class="row g-3" method="post" action="modifier_products.php">
        <div class="col-md-0">
            <label class="form-label"></label>
            <input type="hidden" class="form-control" name="id" value="<? echo $_GET["id"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $produits["name"] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Appartient à la catégorie </label>

            <select id="inputState" class="form-select" name="category_id">
                <?php foreach ($categories as $categorie) {;
                ?>l
                // je viens echo selected si l'id de la cat est égal à l'id de la cat du produit : $categorie['id'] === $produits['category_id']
                <option value="<?= $categorie['id']; ?>" <?php if ($categorie['id'] === $produits['category_id']) {
                                                                echo "selected";
                                                            } ?>>
                    <?= $categorie['name']; ?>
                </option>
            <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Prix</label>
            <input type="text" class="form-control" name="price" value="<?= $produits["price"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="<?= $produits["description"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Details</label>
            <input type="text" class="form-control" name="details" value="<?= $produits["details"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Color</label>
            <input type="text" class="form-control" name="color" value="<?= $produits["color"] ?>">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Produit disponible</label>
            <select id="inputState" class="form-select" name="is_active">
                <option value="1" <?php if ($produits['is_active'] == 1)
                                        echo "selected"; ?>>oui</option>
                <option value="0" <?php if ($produits['is_active'] == 0)
                                        echo "selected"; ?>>non</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">En première page</label>
            <select id="inputState" class="form-select" name="first_page">

                <option value="1" <?php if ($produits['first_page'] == 1)
                                        echo "selected"; ?>>oui</option>
                <option value="0" <?php if ($produits['first_page'] == 0)
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