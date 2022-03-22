<?php

session_start();
if (!isset($_SESSION["randNBR"])) {
    $_SESSION["randNBR"] = mt_rand(0, 100);
} else {
}
?>

<?php
if (isset($_GET["nbr"])) {
    if ($_GET["nbr"] < $_SESSION["randNBR"]) {
        echo "Trop petit..";
    } elseif ($_GET["nbr"] > $_SESSION["randNBR"]) {
        echo "Trop grand ! ";
    } else {
        echo "Bravo !";
        unset($_SESSION["randNBR"]);
    }
};
?>
<form action="demo.php" method="GET">
    <label for="name">Trouve le nombre: </label>
    <input type="number" name="nbr" placeholder="Entre 0 et 100" value="<?= htmlentities($_GET["nbr"]) ?>">
    <button type="submit">Entrer</button>

</form>