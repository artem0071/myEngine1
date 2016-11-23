<?php

function dd($data){

    echo '<pre>';
    var_dump($data);
    echo '</pre';
}
require 'core/bootstrap.php';

$Rout = new Router(require 'app/routes.php');

$App = new App($Rout->direct,$Rout->param);

$App->render($App);


/////*  =============================================   */

dd($Rout);
echo '<br/>';
dd($App);
echo '<br/>';




