<?php

namespace App\Models;

class BaseController 
{
    private array $data;
    private string $render;
    
    public function __construct($template)
    {
       try {
        $file = $_SERVER['REQUEST_URI'] . '/templates/' . strtolower($template) . '.php';

        if(file_exists($file)){
            $this->render = $file;
        }else {
            // throw new customException('Template ' . $template . ' not found!');
        }
        
       } catch (\Throwable $th) {
        //throw $th;
       }
    }
}
