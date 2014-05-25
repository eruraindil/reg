<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class EventsController extends Controller
{
  public function indexAction()
  {
    return $this->render('StikmenRegBundle:Events:index.html.twig');
  }

  public function createAction()
  {
    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }

    return $this->render('StikmenRegBundle:Events:create.html.twig');
  }

  public function storeAction()
  {
    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }

    return null;
  }

  public function showAction()
  {
    return null;
  }

  public function editAction()
  {
    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }

    return null;
  }

  public function updateAction()
  {
    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }

    return null;
  }

  public function destroyAction()
  {
    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }

    return null;
  }
}
