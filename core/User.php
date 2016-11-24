<?php

/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 24.11.16
 * Time: 11:53
 */
class User
{
    /* USER STATUS:
     * 0-9 - blocked
     * 10-19 - new user
     * 20 - 49 - user
     * 50 - 79 - editors
     * 80 - 90 - admins
     * 91 - 100 - ADMIN
     */

    public $Login;
    public $Pass;
    public $Email;
    public $Lang = 'en';
    public $Status = 10;
    public $IP;
    public $User_Agent;


    public function __construct($cookie, $server)
    {
        $this->IP = $server['REMOTE_ADDR'];
        $this->User_Agent = $server['HTTP_USER_AGENT'];

        // если установлены куки
        if (isset($cookie) && count($cookie) != 0){

            

        } else{

            $this->Lang = $server['HTTP_ACCEPT_LANGUAGE'];
        }
    }


}