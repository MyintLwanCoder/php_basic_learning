<?php

class Router
{
    protected $routes=[];
    // [
    //     ""=>"controllers/IndexController.php",
    //     "about"=>"controllers/AboutController.php",
    //     "contact"=>"controllers/ContactController.php",
    // ]
    public static function load($filename)
    {
        $router=new Router;
        require $filename;
        return $router;
    }
    public function register($routes)
    {
        $this->routes=$routes;
    }
    public function direct($uri) //about
    {
        if (array_key_exists($uri, $this->routes)) {
            return  $this->routes[$uri];
            // controllers/IndexController.php
        }
    }
}