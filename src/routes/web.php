<?php 
$router = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {


    // Class method endpoints
    $r->addRoute("GET", "/dashboard", [UserController::class, "getUsers"]);
    $r->addRoute("POST", "/users/{id}", [UserController::class, "updateUser"]);
});