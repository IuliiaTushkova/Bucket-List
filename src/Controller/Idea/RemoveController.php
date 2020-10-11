<?php

namespace App\Controller\Idea;

use App\Entity\Idea;
use App\Repository\IdeaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RemoveController extends AbstractController
{
    /*
     * get the chosen element by id
     * remove it
     * redirect to the same view
     */

    /**
     * @Route("/remove/{id}", requirements={"id"="\d+"}, name="remove_one")
     */
    public function removeOne($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Idea::class);
        
        //get the element
        $elemToRemove = $repository->find($id);
        //dump($elemToRemove);

        //remove it
        $em->remove($elemToRemove);
        $em->flush();

        //user message
        $this->addFlash('success', 'L\'idée est supprimée');


        return $this->redirectToRoute('home');
    }

    /*
     * Remove all ideas
     */
    /**
     * @Route("/remove/all", name="remove_all")
     */
    public function removeAll(){

        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Idea::class);

        //get the element
        $allElem = $repository->findAll();
        dump($allElem);

        //delete the elements with DQL query
        $repository->removeAllQuery();

        //remove it
        $em->flush();

        //user message
        $this->addFlash('success', 'Maintenant ta liste est vide! Tu peux recommencer à la remplir.');


        return $this->redirectToRoute('home');

    }

}
