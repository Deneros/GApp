<?php

namespace App\Controller;

class BaseController
{
    private array $data;
    private string $render;


    public function render(string $viewName, array $data)
    {
        $viewPath = __DIR__."/../../views/". $viewName . ".phtml";

        if(file_exists($viewPath)){
            extract($data);
            require_once($viewPath);
        }else {
            echo "Error: La vista: $viewName no existe";
        }
    }
}
