<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// includes files
define('ROOT', dirname(__FILE__));
require_once (ROOT. '/components/Router.php');

// BD

//
$router = new Router();
$router->run();