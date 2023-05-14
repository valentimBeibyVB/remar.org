<?php

use CoffeeCode\Router\Router;

require_once "./app/Config/Router.php";
require_once "./app/Config/Database.php";
require_once "./app/Helpers/helpers.php";
require_once "./vendor/autoload.php";

$router = new Router(BASE_URL);

$router->namespace('App\Controllers');


foreach ($routers as $route) {
    if (strtoupper($route["type"]) === "GET"){
        $router->get($route["route"], $route["controller"]);
    }

    if (strtoupper($route["type"]) === "POST"){
        $router->post($route["route"], $route["controller"]);
    }
}


$router->dispatch();