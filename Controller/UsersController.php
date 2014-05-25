<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Stikmen\RegBundle\Entity\User;
use Stikmen\RegBundle\Form\Type\UserType;

class UsersController extends Controller
{
  public function indexAction()
  {
    return $this->render('StikmenRegBundle:Users:index.html.twig');
  }

  public function createAction()
  {
    $user = new User();

    $form = $this->createForm(new UserType(), $user, array(
      'action' => $this->generateUrl('users_store'),
    ));

    return $this->render(
      'StikmenRegBundle:Users:create.html.twig',
      array('form' => $form->createView())
    );
  }

  public function storeAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $form = $this->createForm(new UserType(), new User());

    $form->handleRequest($request);

    if ($form->isValid()) {
      $user = $form->getData();

      $factory = $this->get('security.encoder_factory');
      $encoder = $factory->getEncoder($user);

      $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
      $user->setPassword($password);

      $em->persist($user);
      $em->flush();

      return $this->redirect($this->generateUrl('homepage'));
    }

    return $this->render(
      'StikmenRegBundle:Users:create.html.twig',
      array('form' => $form->createView())
    );
  }
}
