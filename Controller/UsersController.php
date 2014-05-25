<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Stikmen\RegBundle\Entity\User;
use Stikmen\RegBundle\Form\Type\UserType;

class UsersController extends Controller
{

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function indexAction()
  {
    $repository = $this->getDoctrine()
      ->getRepository('StikmenRegBundle:User');

    $users = $repository->findAll();

    return $this->render(
      'StikmenRegBundle:Users:index.html.twig',
      array('users' => $users)
    );
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
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

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
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

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function showAction($id)
  {
    return null;
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function editAction($id)
  {
    return null;
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function updateAction()
  {
    return null;
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function destroyAction($id)
  {
    return null;
  }
}
