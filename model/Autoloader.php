<?php

namespace App;

class Autoloader
{

    /**
     * Charge automatiquement les classes necessaires
     */
    static function register()
    {
        spl_autoload_register(function ($className) {
            var_dump($className);
            require "model/" . $className . ".php";
        });
    }

    /**
     * Charge les classes necessaires dans les controller en lecture seul
     */
    static function autoload($className)
    {
        require_once "../model/" . $className . ".php";
    }



    /**
     * Charge les vues  
     */
    static function view($view)
    {
        var_dump($view);
        require "view/" . $view . "/" . $view . ".php";
    }

    /**
     * Charge les controller 
     */
    static function controller($controller)
    {
        var_dump($controller);
        require "controller/" . $controller . ".php";
    }
}
