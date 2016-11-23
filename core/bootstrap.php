<?php
spl_autoload_register(function ($class_name) {
    if (file_exists('core/'. $class_name . '.php')) include 'core/'. $class_name . '.php';
    elseif (file_exists('core/DB/'. $class_name . '.php')) include 'core/DB/'. $class_name . '.php';
    elseif (file_exists('app/controllers/'. $class_name . '.php')) include 'app/controllers/'. $class_name . '.php';
});