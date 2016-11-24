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
    public static function registr(){

        require 'app/views/registr.view.php';

    }
    public static function login(){

        require 'app/views/login.view.php';

    }
    public static function toExit(){

        setcookie('Login','',-1);
        setcookie('Pass','',-1);

        header('Location: /');

    }

    public static function logUser(){


        $login = $_POST['Login'];
        $pass = $_POST['Pass'];

        $res = App::DB()->selectMyUser('Users', $login,$pass);

        if (count($res) == 1) {

            setcookie('Login', $login, time()+3600*24*7,'/');
            setcookie('Pass', $pass, time()+3600*24*7,'/');

            header('Location: /user/'.$login);

        }
        else header('Location: /login');

        dd($res);

    }
}