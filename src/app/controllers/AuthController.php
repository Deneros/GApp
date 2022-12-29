<?php 

namespace App\Controller;

use App\Controller\BaseController;
use Psr\Http\Message\ResponseInterface;
use Laminas\Diactoros\Request;

class AuthController extends BaseController
{
    public function index()
    {
       $this->render('login',["tittle"=>"login"]);
    }
    
}
