<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
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
        $competences = [
           "PHP" => [
               "label" => "PHP",
               "icon" => "fab fa-php",
               "category" => "Langage",
               "note" => 4
           ],
           "Javascript" => [
               "label" => "Javascript",
               "icon" => "fab fa-js",
               "category" => "Langage",
               "note" => 4
           ],
           "CSS /  SCSS"=> [
               "label" => "CSS / SCSS",
               "icon" => "fab fa-css3",
               "category" => "langage",
               "note" => 4
           ],
           "Windows" => [
               "label" => "Windows",
               "icon" => "fab fa-windows",
               "category" => "OS",
               "note" => 4
           ],
           "Linux Ubuntu" => [
               "label" => "Linux Ubuntu",
               "icon" => "fab fa-linux",
               "category" => "OS",
               "note" => 3
           ],
           "Symfony" => [
               "label" => "Symfony",
               "icon" => "fas fa-folder-open",
               "category" => "Framework",
               "note" => 4
           ],
           "Doctrine ORM" => [
               "label" => "Doctrine ORM",
               "icon" => "fas fa-database",
               "category" => "Base de données",
               "note" => 3
           ],
           "Zend Framework"  => [
               "label" => "Zend Framework 2",
               "icon" => "fas fa-folder-open",
               "category" => "Framework",
               "note" => 3
           ],
           "JQuery" => [
               "label" => "JQuery",
               "icon" => "fab fa-js",
               "category" => "Bibliothèque",
               "note" => 4
           ],
           "Bootstrap" => [
               "label" => "Bootstrap",
               "icon" => "fas fa-columns",
               "category" => "Bibliothèque",
               "note" => 3
           ],
           "Angular" => [
               "label" => "Angular",
               "icon" => "fab fa-angular",
               "category" => "Framework",
               "note" => 3
           ],
           "DataTable" => [
               "label" => "DataTable",
               "icon" => "fas fa-table",
               "category" => "Bibliothèque",
               "note" => 4
           ],
           "JQuery UI" => [
               "label" => "JQuery UI",
               "icon" => "fab fa-js",
               "category" => "Bibliothèque",
               "note" => 3
           ],
           "MySQL" => [
               "label" => "MySQL",
               "icon" => "fas fa-database",
               "category" => "Base de données",
               "note" => 3
           ],
           "Git" => [
               "label" => "Git",
               "icon" => "fab fa-git",
               "category" => "Versionning",
               "note" => 3
           ],
        ];

      return $this->render('index/competences.html.twig', [
          "competences" => $competences
      ]);
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
    public function contact(Request $request) {
        $form = $this->createFormBuilder()
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'label_attr' => [
                    'class' => 'col-12 col-sm-3 offset-sm-1'
                ],
                'attr' => [
                    'class' => 'col-12 col-sm-7'
                ]
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'col-12 col-sm-3 offset-sm-1'
                ],
                'attr' => [
                    'class' => 'col-12 col-sm-7'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'label_attr' => [
                    'class' => 'col-12 col-sm-3 offset-sm-1'
                ],
                'attr' => [
                    'class' => 'col-12 col-sm-7'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'label_attr' => [
                    'class' => 'col-12 col-sm-3 offset-sm-1'
                ],
                'attr' => [
                    'class' => 'col-12 col-sm-7'
                ]
            ])
            ->add('send', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn btn-default btn-dark'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
        }

      return $this->render('index/contact.html.twig', [
          'form' => $form->createView()
      ]);
    }
}