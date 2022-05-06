<?php
class Personnage
{
    // je définis des propriétés (des variables) à mon perso 
    // public : la variable est accessible au sein de la classe et en dehors 
    public $vie = 80;

    public $atk = 20;

    // par défault il n'y aura pas de valeur, l'on définira le $nom dans l'index
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            // $this fait référence à l'instance en cours
            $this->vie = 100;
        } else {
            $this->vie += $vie;  //équivaut à $this->vie = $this->vie + $vie;
        }
    }

    public function mort()
    {
        /* switch ($this->vie) {
            case '0':
                echo "true";
                break;
            default:
                echo "false";
        */
        return $this->vie <= 0;
    }

    public function attaque($cible)
    {

        // $this est l'attaquant
        // $cible est le défenseur
        $cible->vie -= $this->atk;
    }
}
