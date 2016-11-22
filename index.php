<?php

function dd($data){

    echo '<pre>';
    var_dump($data);
    echo '</pre';
}
require 'core/bootstrap.php';

$rout = new Router(require 'app/routes.php');

$app = new App($rout->direct,$rout->param);

require $app->render();


/////*  =============================================   */

dd($rout);
echo '<br/>';
dd($app);



