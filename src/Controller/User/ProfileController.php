<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profile")
 */
class ProfileController extends AbstractController
{
    /**
     * @Route("/me", name="my_profile")
     */
    public function homeConnected()
    {
        return $this->render('profile/profile.html.twig');
    }
}
