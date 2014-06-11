<?php

namespace Stikmen\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class EventsController extends Controller
{
  public function indexAction()
  {
    $repository = $this->getDoctrine()
      ->getRepository('StikmenRegBundle:Event');

    $events = $repository->findAll();

    return $this->render(
      'StikmenRegBundle:Events:index.html.twig',
      array('events' => $events)
    );
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function createAction()
  {
    return $this->render('StikmenRegBundle:Events:create.html.twig');
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function storeAction()
  {
    return null;
  }

  public function showAction($id)
  {
    $repository = $this->getDoctrine()
      ->getRepository('StikmenRegBundle:Event');

    $event = $repository->find($id);

    return $this->render(
      'StikmenRegBundle:Events:show.html.twig',
      array('event' => $event)
    );
  }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function editAction()
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
  public function destroyAction()
  {
    return null;
  }
}
