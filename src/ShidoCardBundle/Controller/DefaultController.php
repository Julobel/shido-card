<?php
// src/Controller/DefaultController.php
namespace App\ShidoCardBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
    * @Route("/")
    */
    public function index()
    {
        return $this->render('index.html.twig');

    }
}
