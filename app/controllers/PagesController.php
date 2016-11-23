<?php

class PagesController
{
    
    public static function index(){

        $words = array('1' => '1', '2' => '2', '3' => '3');

        require 'app/views/index.view.php';
    }
    
    public static function about(){

        require 'app/views/about.view.php';
    }
    
    public static function notFound(){


        require 'app/views/404.view.php';
    }
    
    
}