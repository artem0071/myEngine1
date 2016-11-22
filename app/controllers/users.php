<?php

$Users = $DB->selectAll('Users');

require 'app/views/users.view.php';
