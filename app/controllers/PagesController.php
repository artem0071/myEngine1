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

    public static function users(){

        $Users = App::DB()->selectAll('Users');
        require 'app/views/users.view.php';
    }

    public static function user($App){

        $user = App::DB()->selectUser('Users', $App->param);

        if (count($user) == 0) header('Location: /');

        require 'app/views/user.view.php';

    }
    
    public static function notFound(){


        require 'app/views/404.view.php';
    }
    
    
}