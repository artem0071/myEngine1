<?php

class InsertController
{
    public static function addUser(){

        App::DB()->insert('Users', [
            'User_Login' => $_POST['name']
        ]);

        header('Location: /users');
    }
}