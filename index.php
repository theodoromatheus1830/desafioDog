<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("App\Controllers");

$router->group(null);
$router->get("/", "Dog:index"); 

$router->group("ops");
$router->get("/{errcode}", "Errors:error"); 

$router->dispatch();

if($router->error()){
    $router->redirect("ops/{$router->error()}");
}
