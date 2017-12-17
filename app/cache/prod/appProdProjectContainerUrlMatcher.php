<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // recipe_list
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'recipe_list');
            }

            return array (  '_controller' => 'RecipeBundle\\Controller\\RecipeController::listAction',  '_route' => 'recipe_list',);
        }

        // recipe_create
        if ('/create' === $pathinfo) {
            return array (  '_controller' => 'RecipeBundle\\Controller\\RecipeController::createAction',  '_route' => 'recipe_create',);
        }

        // recipe_details
        if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_details')), array (  '_controller' => 'RecipeBundle\\Controller\\RecipeController::detailsAction',));
        }

        // recipe_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_edit')), array (  '_controller' => 'RecipeBundle\\Controller\\RecipeController::editAction',));
        }

        // homepage
        if ('/sdfsdf' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
