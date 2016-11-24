<?php
$start = microtime(true);

function dd($data){

    echo '<pre>';
    var_dump($data);
    echo '</pre';
}
require 'core/bootstrap.php';

$User = new User($_COOKIE,$_SERVER);

$Rout = new Router(require 'app/routes.php');

$App = new App($Rout->direct,$Rout->param);

$App->render($App);


/////*  =============================================   */
dd($_COOKIE);
dd($User);
echo '<br/>';
dd($Rout);
echo '<br/>';
dd($App);
echo '<br/>';




echo 'Time of script'.(microtime(true) - $start).' sec.';
