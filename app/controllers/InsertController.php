<?php

class InsertController
{
    public static function addUser(){

        App::DB()->insert('Users', [
            'User_Login' => $_POST['name']
        ]);

        header('Location: /users');
    }

    public static function regUser(){

        $login = $_POST['Login'];
        $pass = $_POST['Pass'];

        $res = App::DB()->selectUser('Users', $login);

        if (count($res) == 0) {

            App::DB()->insert('Users', [
                'User_Login' => $login,
                'User_Pass' => $pass
            ]);

            setcookie('Login', $login, time()+3600*24*7,'/');
            setcookie('Pass', $pass, time()+3600*24*7,'/');

            header('Location: /user/'.$login);

        }
        else header('Location: /registr');
        
    }
}