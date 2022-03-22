<?php include "header.php";
?>
<?php
$sql = 'SELECT * FROM `users` WHERE id=:id';
$query = $db->prepare($sql);
// Bind mes paramètres où $_GET['id'] a pour flag/marqueur :id
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result);
?>

<div class="container-fluid">
    <h2> Détails de l'utilisateur</h2>
    <form class="row g-3" method="post" action="modifier_user.php">
        <div class="col-md-0">
            <label class="form-label"></label>
            <input type="hidden" class="form-control" name="id" value="<? echo $_GET["id"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" value="<? echo $result["pseudo"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="<? echo $result["password"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" value="<? echo $result["firstname"] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" value="<? echo $result["lastname"] ?>">
        </div>

        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<? echo $result["email"] ?>">
        </div>
        <div class="col-md-2">
            <label class="form-label">Age</label>
            <input type="number" min="0" max="110" class="form-control" name="age" value="<? echo $result["age"] ?>">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Type</label>
            <select id="inputState" class="form-select" name="type">
                <option value="<? echo $result["type"] ?>"><? echo $result["type"] ?></option>
                <option value="Client">client</option>
                <option value="Admin">admin</option>
            </select>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Modifier">
        </div>
    </form>
</div>
<?php include "footer.php";
?>