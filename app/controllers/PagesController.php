<?php

class PagesController
{
    
    public static function index($App){

        $words = $App->words;
        require 'app/views/index.view.php';
    }
    
    public static function about(){

        require 'app/views/about.view.php';
    }
    
    public static function notFound(){


        require 'app/views/404.view.php';
    }
    
    
}