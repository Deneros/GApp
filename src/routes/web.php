<?php 
require_once __DIR__.'/../../vendor/autoload.php';

$router = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {


    // Class method endpoints
    $r->addRoute('GET', '/hello', function() {
        echo "Hola mundo";
      });
    $r->addRoute("GET", "/login", [AuthController::class, "index"]);
    $r->addRoute("POST", "/users/{id}", [UserController::class, "updateUser"]);
});