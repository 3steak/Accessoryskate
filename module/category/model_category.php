<?php
include "functions/db.php";
class ModelCategory
// ce qui communique avec ma base de donnée

{
    public $connect;
    function __construct()
    {
        // connexion a la db pour création de class
        $this->connect = connect();
    }

    // création des methodes pour afficher,modifier et supprimer (CRUD CAT)

    public function  getAll()
    {

        $sql = 'SELECT * FROM `category`';
        $query = $this->connect->prepare($sql);
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}
