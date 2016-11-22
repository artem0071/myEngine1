<?php
require 'core/Router.php';
require 'core/Request.php';
require 'core/App.php';
require 'core/DB/Connection.php';
require 'core/DB/QueryBuilder.php';

$config = require 'config.php';

$DB = new QueryBuilder(Connection::make($config['database']));