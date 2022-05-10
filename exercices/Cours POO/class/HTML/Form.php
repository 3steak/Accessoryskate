<?php

namespace Tutoriel\HTML;

/** 
 *  Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form
{

    /**
     * @var array Données utilisées par le formulaire 
     */

    protected $data;

    /**
     * @var string Tag utilisé pour entourer les champs 
     */

    public $surround = "p";

    /**
     * @param array $data Données utilisateur par le formumlaire
     */

    public function __construct($data = array())
    {
        $this->data = $data;
    }



    /**
     * @param $index string Index de la valeur à recuperer 
     * @return string
     */

    protected function getValue(string $index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
}
