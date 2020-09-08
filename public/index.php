<?php

// composer autoload
require_once __DIR__ . "/../vendor/autoload.php";

// saves the env vars in the $_ENV superglobal
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// runs the app
$router = new Router;
$router->route();