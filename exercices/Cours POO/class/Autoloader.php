<?php

namespace Tutoriel;

class Autoloader
{


    /**
     * register
     *
     * @return void
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * autoload
     *
     * @param  mixed $class
     * @return void
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);

            require 'class/' . $class . '.php';
        }
    }
}
