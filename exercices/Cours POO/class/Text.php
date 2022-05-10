<?php

class Text
{

    const SUFFIX = " €";

    // self fait référence à la classe courante : Text 
    // static permet de ne pas être obligé d'instancier 
    public static function withZero($chiffre)
    {
        if ($chiffre < 10) {
            return '0' . $chiffre . self::SUFFIX;
        } else {
            return $chiffre . self::SUFFIX;
        }
    }
}
