<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index() {
       return $this->render('index/index.html.twig');
    }
}