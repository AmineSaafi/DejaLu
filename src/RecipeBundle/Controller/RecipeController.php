<?php

namespace RecipeBundle\Controller;

use RecipeBundle\Entity;
use RecipeBundle\Form\Type\RecipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RecipeController extends Controller
{
    public function listAction(Request $request)
    {
        $recipes = $this->getDoctrine()
            ->getRepository('RecipeBundle:Recipe')
            ->findAll();

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM RecipeBundle:Recipe a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );

        return $this->render('@Recipe/Recipe/index.html.twig', array(
            'recipes' => $recipes,
            'pagination' => $pagination
        ));
    }

    public function createAction(Request $request)
    {
        $form = $this->createForm(RecipeType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $recipe = $form->getData();

            $em->persist($recipe);
            $em->flush();

            $this->addFlash('success', 'We saved a recipe with id ' . $recipe->getId());

            return $this->redirectToRoute('recipe_list');
        }

        return $this->render('@Recipe/Recipe/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editAction(Request $request, Entity\Recipe $recipe)
    {
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('info', 'We edited a recipe with id ' . $recipe->getId());

            return $this->redirectToRoute('recipe_list');
        }

        return $this->render('@Recipe/Recipe/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function detailsAction(Entity\Recipe $recipe)
    {
        return $this->render('@Recipe/Recipe/details.html.twig', [
            'recipe' =>$recipe
        ]);
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $recipe = $em->getRepository('RecipeBundle:Recipe')->find($id);

        $em->remove($recipe);
        $em->flush();

        $this->addFlash('notice', 'Recipe Removed!');
        return $this->redirectToRoute('recipe_list');
    }

}