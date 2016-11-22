<?php

$DB->insert('Users', [
    'User_Login' => $_POST['name']
]);

header('Location: /');