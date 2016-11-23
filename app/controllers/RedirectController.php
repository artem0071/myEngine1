<?php

class RedirectController
{
    public static function searchUser(){
        header('Location: /user/'.$_POST['user']);
    }
}