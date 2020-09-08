<?php

// composer autoload
require_once __DIR__ . "/../vendor/autoload.php";

// saves the env vars in the $_ENV superglobal
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

spl_autoload_register(function($className) {
    include __DIR__ . "/../app/core/$className.php";
});

$router = new Router;
$router->route();