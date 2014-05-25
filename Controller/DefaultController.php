<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Stikmen\RegBundle\Entity\User;
use Stikmen\RegBundle\Form\Type\UserType;

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

  public function loginAction(Request $request)
  {
    $session = $request->getSession();

    // get the login error if there is one
    if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(
        SecurityContextInterface::AUTHENTICATION_ERROR
      );
    } else {
      $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
      $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
    }

    return $this->render(
      'StikmenRegBundle:Default:login.html.twig',
      array(
        // last username entered by the user
        'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
        'error'         => $error,
      )
    );
  }
}
