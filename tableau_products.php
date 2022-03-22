<?php

$sql = "SELECT products.*,category.name as `category_name` FROM `products` LEFT JOIN category ON products.category_id = category.id";
$query = $db->prepare($sql);
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
    <p>Tableau des produits</p>

    <a class="btn btn-light" href="add_products.php" role="button">Ajouter un produit</a>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Categorie</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Details</th>
                <th scope="col">Color</th>
                <th scope="col">Produit disponible</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">En première page</th>
                <th scope="col">Action</th>
        </thead>
        <tbody>
            <?php
            foreach ($produits as $products) {
            ?>
                <tr>
                    <td><?= $products['category_name'] ?></td>
                    <td><?= $products['name'] ?></td>
                    <td><?= $products['price'] ?></td>
                    <td><?= $products['description'] ?></td>
                    <td><?= $products['details'] ?></td>
                    <td><?= $products['color'] ?></td>
                    <td><?php if ($products['is_active'] == 1) {
                            echo "oui";
                        } else {
                            echo "non";
                        } ?></td>
                    <td><?= $products['created_at'] ?></td>
                    <td><?= $products['updated_at'] ?></td>
                    <td><?php if ($products['first_page'] == 1) {
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