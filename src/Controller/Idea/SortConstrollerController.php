<?php

namespace App\Controller\Idea;

use App\Entity\Category;
use App\Form\SortType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SortConstrollerController extends AbstractController
{

    /*
     * Get request from List
     * Redirect to the sort view
     */
    /**
     * @Route("/categories", name="sort_by_category")
     */
    public function goToSorting()
    {
        return $this->render('sort_controller/sort.html.twig');
    }

    /*
     * Get the form's data
     * Get all ideas related to the chosen categorie
     * Redirect to the display view
     */

    /**
     * @Route("/categories/sort", name="get_sorted")
     */
    public function sort(Request $request)
    {
        $myCategory = new Category();
        $sortForm = $this->createForm(SortType::class, $myCategory);
        $sortForm->handleRequest($request);
        if ($sortForm->isSubmitted() && $sortForm->isValid()) {

            return $this->redirectToRoute('display_ideas_by_cat', [
                'categorie' => $myCategory
            ]);
        }
    }

        /*
         * Get the request with the chosen categorie
         * display all ideas related to
         */
        /**
         * @Route("/categories/sorted/{id}", name="display_ideas_by_cat")
         */
        public function displayIdeasSortedByCategories(Category $category)
        {
            $ideasOfCategory = $category->getIdea();
            return $this->render('sort_constroller/displaySortedIdeas.html.twig', [
                'ideas' => $ideasOfCategory
            ]);
        }


}
