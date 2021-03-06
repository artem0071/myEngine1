<?php

class App
{
    public $direct;
    public $param;
    public $lang = 'en'; // язык по умолчанию
    public $words = [];
    
    public static function DB(){

        $config = require 'config.php';
        return new QueryBuilder(Connection::make($config['database']));
    }

    public function __construct($direct,$param, $lang)
    {
        $this->direct = $direct;
        $this->param = $param;
        $this->lang = $lang;
    }

    public function render($App){

        $mix = explode('@', $this->direct);
        $controller = $mix[0];
        $method = $mix[1];

        $controller = new $controller;
        $this->words = require 'app/modules/Languages/'.$this->lang.'.php';

        $controller::$method($App);

    }


    
}