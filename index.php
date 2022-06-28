<?php include "admin/header.php";

include "module/home/controler_category.php";
$home = new HomeControler();

var_dump($home->categories);

?>


<div id=body>
    <p>CRUD !</p>
    <button>
        <a class="button" href="add.php">
            Ajouter un user
        </a>
    </button>
</div>
<?php include "admin/footer.php";
?>