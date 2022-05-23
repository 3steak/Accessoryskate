<?php //Initialisation de la classe

class Soldat
{

    private function __construct($name, $attaque)
    {
    }

    //Définition des variables
    public $vie = 100;
    public $defense = 10;
    public $x = 0;

    function attaquer($vieAdversaire)
    {
        $this->walk;
        return $vieAdversaire - $this->attaque;
    }


    function walk()
    {
        $this->x += 2; //On fait avancer le perso de 2 cases;
    }
}

/////////////////////////////////////////////////////



//Définir un nouvel objet appelé chevalier à partir d'une instance de la classe soldat
$chevalier = new Soldat('Jacques', 80);
var_dump($chevalier); //Return ($vie, $attaque, $defense de Jacques);