<?php

namespace Stikmen\RegBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('username', 'email');
    $builder->add('password', 'repeated', array(
     'first_name'  => 'password',
     'second_name' => 'confirm',
     'type'        => 'password',
    ));
    $builder->add('roles', 'choice', array(
      'choices' => array('ROLE_USER' => 'User', 'ROLE_ADMIN' => 'Admin'),
      'required' => true,
      'multiple' => true,
    ));
    $builder->add('register', 'submit');
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Stikmen\RegBundle\Entity\User'
    ));
  }

  public function getName()
  {
    return 'user';
  }
}
