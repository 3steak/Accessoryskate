<?php
$sql = 'SELECT * FROM `category`';
$query = $db->prepare($sql);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
    <p>Tableau des Catégories</p>

    <a class="btn btn-light" href="add_category.php" role="button">Ajouter une catégorie</a>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Users_id</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Categorie active</th>
                <th scope="col">Action</th>
        </thead>
        <tbody>
            <?php
            foreach ($categories as $category) {
            ?>
                <tr>
                    <td><?= $category['name'] ?></td>
                    <td><?= $category['users_id'] ?></td>
                    <td><?= $category['created_at'] ?></td>
                    <td><?= $category['updated_at'] ?></td>

                    <td><?php if ($category['is_active'] == 1) {
                            echo "oui";
                        } else {
                            echo "non";
                        } ?></td>
                    <td>
                        <!--TODO mettre un icone a la place du bouton ( crayon et poubelle) !-->
                        <a class="btn btn-primary" href="edit_category.php?id=<?php echo $category['id'] ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="delete_category.php?id=<?php echo $category['id'] ?>" role="button">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>