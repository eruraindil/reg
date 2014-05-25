<?php

namespace Stikmen\RegBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="username", message="Email already taken")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=128)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096)
     */
    protected $password;

    /**
     * @ORM\Column(type="array")
     */
    protected $roles;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setUsername($username)
    {
      $this->username = $username;

      return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
      $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    public function getSalt()
    {
      return null;
    }

    public function getRoles()
    {
      return $this->roles;
    }

    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
      return serialize(array(
        $this->id,
        $this->username,
        $this->password,
        $this->roles,
        // see section on salt below
        // $this->salt,
      ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
      list (
        $this->id,
        $this->username,
        $this->password,
        $this->roles,
        // see section on salt below
        // $this->salt
      ) = unserialize($serialized);
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
}
