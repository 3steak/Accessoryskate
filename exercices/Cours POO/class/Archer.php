<?php
// extends : prendre les propriétés de Personnage, donc son PARENT
class Archer extends Personnage
{
    protected $vie = 40;

    public function __construct($nom)
    {
        $this->vie = $this->vie / 2;

        parent::__construct($nom);
    }
    public function attaque($cible)
    {

        // $this est l'attaquant
        // $cible est le défenseur
        $cible->vie -= $this->atk;

        // pour appeler le parent dans la méthode 
        parent::attaque($cible);
    }
}
