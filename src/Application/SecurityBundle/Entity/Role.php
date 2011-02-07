<?php

namespace Application\SecurityBundle\Entity;

use Symfony\Component\Security\Role\RoleInterface;

/**
 * Application\SecurityBundle\Entity\Role
 */
class Role implements RoleInterface
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Application\SecurityBundle\Entity\User
     */
    private $users;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add users
     *
     * @param Application\SecurityBundle\Entity\User $users
     */
    public function addUsers(\Application\SecurityBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection $users
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    public function getRole()
    {
        return $this->name;
    }
}