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

  public function loginAction()
  {
    return $this->render('StikmenRegBundle:Default:login.html.twig');
  }

  public function userCreateAction() {
    return $this->render('StikmenRegBundle:Default:userCreate.html.twig');
  }

  public function userStoreAction() {
    $factory = $this->get('security.encoder_factory');
    $user = new Stikmen\RegBundle\Entity\User();

    $encoder = $factory->getEncoder($user);
    $password = $encoder->encodePassword('ryanpass', $user->getSalt());
    $user->setPassword($password);
  }
}
