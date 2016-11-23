<?php

class Router
{
    public $routes = [];
    public $direct;
    public $param = [];
    public $result;

    public function __construct($routes)
    {
        $this->routes = $routes;
        self::direct(Request::getUri(), $routes); 
    }

    public function direct($uri, $routes){

        $result = explode('/', $uri);

        $this->result = $result;

        $page = $result[0];
//        $this->param = ( isset($result[1]) ? $result[1] : 'main');
        if (!isset($result[1])) $this->param[] = 'main';
        else {
            $count = count($this->result);

            for ($i = 1; $i < $count; $i++) {
                $this->param[] .= $result[$i];
            }
        }
        
        if (array_key_exists($page, $routes)){
            $this->direct = $this->routes[$page];
        } else $this->direct = $this->routes[404];

    }

    
}