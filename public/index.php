<?php

spl_autoload_register(function($className) {
    include __DIR__ . "/../app/core/$className.php";
});

$router = new Router;
$router->route();