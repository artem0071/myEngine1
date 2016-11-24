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
        if (isset($cookie['Login']) && isset($cookie['Pass']) && count($cookie) != 0 ){

            if (isset($_SESSION['Login']) && isset($_SESSION['Pass']) && isset($_SESSION['Status']) && isset($_SESSION['Lang'])) {

                $this->Login = $_SESSION['Login'];
                $this->Pass = $_SESSION['Pass'];
                $this->Status = $_SESSION['Status'];
                $this->Lang = $_SESSION['Lang'];

            } else {

                $User = App::DB()->selectMyUser('Users', $cookie['Login'], $cookie['Pass']);

                if (count($User) == 1) {

                    $login = $User[0]['User_Login'];
                    $pass = $User[0]['User_Pass'];
                    $lang = $User[0]['User_Lang'];
                    $status = $User[0]['User_Type'];

                    $this->Login = $login;
                    $this->Pass = $pass;
                    $this->Status = $status;
                    $this->Lang = $lang;

                    setcookie('Login', $login, time() + 3600 * 24 * 7, '/');
                    setcookie('Pass', $pass, time() + 3600 * 24 * 7, '/');

                    $_SESSION['Login'] = $login;
                    $_SESSION['Pass'] = $pass;
                    $_SESSION['Lang'] = $lang;
                    $_SESSION['Status'] = $status;

                } else {

                    self::newUser($server);

                }
            }

        } else{

            self::newUser($server);
        }
    }

    private function newUser($server){

        $this->Lang = $server['HTTP_ACCEPT_LANGUAGE'];
        setcookie('Login', '', -1 );
        setcookie('Pass', '', -1 );
        session_destroy();


    }


}