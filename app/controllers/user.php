<?php


$user = $DB->selectUser('Users', $app->param);

if (count($user) == 0) header('Location: /');

require 'app/views/user.view.php';


