<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventsController extends Controller
{
  public function indexAction()
  {
    return $this->render('StikmenRegBundle:Events:index.html.twig');
  }

  public function createAction()
  {
    return $this->render('StikmenRegBundle:Events:create.html.twig');
  }

  public function storeAction()
  {
    return null;
  }

  public function showAction()
  {
    return null;
  }

  public function editAction()
  {
    return null;
  }

  public function updateAction()
  {
    return null;
  }

  public function destroyAction()
  {
    return null;
  }
}
