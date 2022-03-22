<?php include "header.php";
?>

<div class="container-fluid">
    <h2>Ajout d'utilisateur</h2>
    <form class="row g-3" method="post" action="ajouter_category.php">
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Catégorie active ?</label>
            <select id="inputState" class="form-select" name="is_active">
                <option selected>--Active ?--</option>
                <option value="1">oui</option>
                <option value="0">non</option>
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