<?php

class UsersController
{
    public static function users(){

        $Users = App::DB()->selectAll('Users');
        require 'app/views/users.view.php';
    }

    public static function user($App){

        $user = App::DB()->selectUser('Users', $App->param[0]);

        if (count($user) == 0) header('Location: /search');

        require 'app/views/user.view.php';

    }
    
    public static function search(){

        require 'app/views/search.view.php';
        
    }
}