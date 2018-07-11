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

    /**
     * @Route("/competences", name="competences")
     */
    public function competences() {
      return $this->render('index/competences.html.twig');
    }

    /**
     * @Route("/experiences", name="experiences")
     */
    public function experiences() {
      return $this->render('index/experiences.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact() {
      return $this->render('index/contact.html.twig');
    }
}