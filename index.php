<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/components/DbSourse.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/components/router.php');



session_start();

spl_autoload_register(function ($class_name) {
    include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $class_name . '.php';
});
$router = new Router();
$router->run();
    
?>