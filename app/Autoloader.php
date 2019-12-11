<?php
namespace App;

/**
 * Classe Autoloader
 */

class Autoloader{

    /**
     * Fonction permettant d'enregistret l'autoloader
     */

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Fonction permettant d'inclure le fichier correspondant à la classe
     * @param $class
     */
    
    static function autoload($class){
        if (strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }

}