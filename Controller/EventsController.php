<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventsController extends Controller
{
    public function indexAction()
    {
        return $this->render('StikmenRegBundle:Events:index.html.twig');
    }
}
