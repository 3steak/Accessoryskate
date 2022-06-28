<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Boostrap</title>
</head>
<body>
    <div class="container">
        <p>Tableau des Users</p>

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
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>moto</td>
                <td>azerty</td>
                <td>30</td>
                <td>Ottomoto@example.com</td>
                <td>client</td>
                <td>
                    <button type = "button" class="btn btn-primary">Edit</button>
                    <button type = "button" class="btn btn-danger">Delete</button>
                </td>
        
                </tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>moto</td>
                <td>azerty</td>
                <td>30</td>
                <td>Ottomoto@example.com</td>
                <td>client</td>
                <td>
                    <button type = "button" class="btn btn-primary">Edit</button>
                    <button type = "button" class="btn btn-danger">Delete</button>
                </td>
                </tr>
            </tbody> 
        </table>
    </div>

</body>
</html>