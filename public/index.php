<?php 
// Incluye el archivo donde defines tus rutas
require_once "../vendor/autoload.php";
require_once "../src/routes/web.php";

// Obtiene la URI de la solicitud actual
$uri = $_SERVER['REQUEST_URI'];

// Elimina la barra inicial de la URI
$uri = substr($uri, 1);

// Obtiene el verbo HTTP de la solicitud
$httpMethod = $_SERVER['REQUEST_METHOD'];

// Ejecuta el dispatch de FastRoute para obtener la información de la ruta
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

// Procesa la información de la ruta
switch ($routeInfo[0]) {
  case FastRoute\Dispatcher::NOT_FOUND:
    // Muestra un mensaje de error si la ruta no se ha encontrado
    echo "Error: ruta no encontrada";
    break;
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
    // Muestra un mensaje de error si el verbo HTTP no está permitido para la ruta
    $allowedMethods = $routeInfo[1];
    echo "Error: verbo HTTP no permitido";
    break;
  case FastRoute\Dispatcher::FOUND:
    // Obtiene la información de la ruta y ejecuta la acción correspondiente
    $handler = $routeInfo[1];
    $vars = $routeInfo[2];
    // Ejecuta la acción correspondiente a la ruta
    $handler($vars);
    break;
}