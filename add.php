<?php include "header.php";
?>

<div class="container-fluid">
    <h2>Ajout d'utilisateur</h2>
    <form class="row g-3" method="post" action="ajouter.php">
        <div class="col-md-6">
            <label class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="col-md-6">
            <label class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname"> 
        </div>
        <div class="col-md-6">
            <label class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="col-md-2">
            <label class="form-label">Age</label>
            <input type="number"  min="0" max="110" class="form-control" name="age">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Type</label>
            <select id="inputState" class="form-select" name="type">
                <option selected>--Type--</option>
                <option value="Client">client</option>
                <option value="Admin">admin</option>
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
