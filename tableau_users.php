<?php
$sql = 'SELECT * FROM `users`';
$query = $db->prepare($sql);
$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
    <p>Tableau des Users</p>

    <a class="btn btn-light" href="add_user.php" role="button">Add User</a>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Password</th>
                <th scope="col">Age</th>
                <th scope="col">email</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($user as $users) {
            ?>
                <tr>
                    <td><?= $users['id'] ?></td>
                    <td><?= $users['pseudo'] ?></td>
                    <td><?= $users['firstname'] ?></td>
                    <td><?= $users['lastname'] ?></td>
                    <td><?= $users['password'] ?></td>
                    <td><?= $users['age'] ?></td>
                    <td><?= $users['email'] ?></td>
                    <td><?= $users['type'] ?></td>

                    <td>
                        <!--TODO mettre un icone a la place du bouton ( crayon et poubelle) !-->
                        <a class="btn btn-primary" href="edit_user.php?id=<?php echo $users['id'] ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="delete_user.php?id=<?php echo $users['id'] ?>" role="button">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>