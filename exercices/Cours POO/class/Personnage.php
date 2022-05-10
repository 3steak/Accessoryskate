<?php
class Personnage
{
    // je définis des propriétés (des variables) à mon perso 
    // public : la variable est accessible au sein de la classe et en dehors 
    protected static $max_vie = 120;
    protected $vie = 80;

    protected $atk = 20;

    // par défault il n'y aura pas de valeur, l'on définira le $nom dans l'index
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }
    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            // $this fait référence à l'instance en cours
            $this->vie = self::$max_vie;
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
