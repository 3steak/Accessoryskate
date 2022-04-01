<?php include "header.php";
?>
<?
// je selectionne tout de ma table category
$sql = "SELECT * FROM `category`";
$query = $db->prepare($sql);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <h2>Ajout de Produit</h2>
    <form class="row g-3" method="post" action="ajouter_products.php">
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-4">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="col-md-6">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="col-md-4">
            <label class="form-label">Details</label>
            <input type="text" class="form-control" name="details">
        </div>

        <div class="col-4">
            <label class="form-label">Color</label>
            <input type="text" class="form-control" name="color">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Est disponible ?</label>
            <select id="inputState" class="form-select" name="is_active">
                <option selected>oui - non</option>
                <option value="1">oui</option>
                <option value="0">non</option>
            </select>
        </div>

        <div class="col-md-4">
            <label for="inputState" class="form-label"> En première page ?</label>
            <select id="inputState" class="form-select" name="first_page">
                <option selected>oui - non </option>
                <option value="1">oui</option>
                <option value="0">non</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Appartient à la catégorie ?</label>

            <select id="inputState" class="form-select" name="category_id">
                <?php foreach ($categories as $categorie) {;
                ?>

                    <option value="<?= $categorie['id']; ?>"><?= $categorie['name']; ?><?= $categorie['id']; ?></option>
                <?php } ?>

            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Ajouter">
            <button type="reset" class="btn btn-secondary">Réinitaliser</button>
        </div>

    </form>
</div>
<?php include "footer.php";
?>