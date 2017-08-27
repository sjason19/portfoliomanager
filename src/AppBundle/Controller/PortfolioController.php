<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    /**
     * @Route("/portfolio", name="portfolio_list")
     */
    public function listAction()
    {
        // replace this example code with whatever you need
        return $this->render('portfolio/index.html.twig');
    }

    /**
     * @Route("/portfolio/create", name="portfolio_create")
     */
    public function createAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('portfolio/create.html.twig');
    }

    /**
     * @Route("/portfolio/edit/{id}", name="portfolio_edit")
     */
    public function editAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('portfolio/edit.html.twig');
    }


    /**
     * @Route("/portfolio/details/{id}", name="portfolio_details")
     */
    public function detailsAction($id)
    {
        // replace this example code with whatever you need
        return $this->render('portfolio/details.html.twig');
    }
}
