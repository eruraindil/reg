<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StikmenRegBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('StikmenRegBundle:Default:contact.html.twig');
    }
}
