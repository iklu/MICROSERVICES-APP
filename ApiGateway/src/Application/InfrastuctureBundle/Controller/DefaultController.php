<?php

namespace Application\InfrastuctureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationInfrastuctureBundle:Default:index.html.twig');
    }
}
