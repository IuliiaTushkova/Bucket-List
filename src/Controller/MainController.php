<?php

namespace App\Controller;
use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController{
    /*
     * Landing page
     */

    /**
     * @Route("/", name="home")
     */
    public function home(EntityManagerInterface $em)
    {
        //Page d'accueil
        return $this->render('main/main.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        //About author
        return $this->render('main/about.html.twig');
    }
}