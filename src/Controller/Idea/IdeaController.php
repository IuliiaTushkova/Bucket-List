<?php

namespace App\Controller\Idea;

use App\Entity\Category;
use App\Entity\Idea;
use App\Form\MyFormType;
use App\Repository\CategorieRepository;
use App\Repository\IdeaRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class IdeaController extends AbstractController
{

    /*
     * @return liste de toutes les idée dans la bdd
     *
     */
    /**
     * @Route("/idea", name="idea")
     */
    public function idea(EntityManagerInterface $em, IdeaRepository $rep)
    {

        //get ideas sorted by date
       // $ideas = $rep->findBy([],["dateCreated"=>"DESC"]);

       // return $this->render('idea/list.html.twig', [
        //    'ideas' => $ideas
       // ]);

        return $this->render('idea/list.html.twig');
    }

    /**
     * @Route("/idea/detail/{id}", requirements={"id"="\d+"}, name="idea_details")
     */
    public function detail($id=null, IdeaRepository $rep)
    {
        $myElem = $rep->find($id);
        dump($myElem);
        return $this->render('idea/detail.html.twig', [
            'idee' => $myElem
        ]);
    }

    /*
     * Ajouter une nouvelle idée via un formulaire
     */

    /**
     * @Route("add", name="idea_add")
     */

    public function add(EntityManagerInterface $em, Request $request)
    {
        //créer une instance
        $idee = new Idea();

        $this->getDoctrine()->

        //on crée un forme et passe une intité vide dedans
        $ideeForm = $this->createForm(MyFormType::class, $idee);

        //injecter les données dans l'instance créée
        $ideeForm->handleRequest($request);

        //checker si le from est submitted et tout est valide
        if($ideeForm->isSubmitted() && $ideeForm->isValid()){

            //champs remplis par default
            $idee->setDateCreated(new \DateTime());
            $idee->setIsPublished(true);

            //@todo find a solution
            $idee->setUser($this->getUser());

            $em->persist($idee);
            dump($idee);
            $em->flush();

            $this->addFlash('success', 'L\'idée est bien enregistrée');

           return $this->redirectToRoute('home');
        }

        return $this->render('idea/add.html.twig', [
            "ideaForm" => $ideeForm->createView()
        ]);
    }

}
