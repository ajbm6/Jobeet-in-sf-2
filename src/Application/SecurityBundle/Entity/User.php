<?php

namespace Application\SecurityBundle\Entity;

use Symfony\Component\Security\User\AccountInterface;

/**
 * Application\SecurityBundle\Entity\User
 */
class User
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var datetime $joined_at
     */
    private $joined_at;

    /**
     * @var Application\SecurityBundle\Entity\Role
     */
    private $roles;

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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set joined_at
     *
     * @param datetime $joinedAt
     */
    public function setJoinedAt($joinedAt)
    {
        $this->joined_at = $joinedAt;
    }

    /**
     * Get joined_at
     *
     * @return datetime $joinedAt
     */
    public function getJoinedAt()
    {
        return $this->joined_at;
    }

    /**
     * Add roles
     *
     * @param Application\SecurityBundle\Entity\Role $roles
     */
    public function addRoles(\Application\SecurityBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;
    }

    /**
     * Get roles
     *
     * @return Doctrine\Common\Collections\Collection $roles
     */
    public function getRoles()
    {
        return $this->roles;
    }
    
    /**
     * Return a string rep. of the object.
     * @return string
     */
    public function __toString()
    {
        return $this->getUsername();
    }
    
    /**
     * Generate/return a salt for the pass encoding.
     * @return string
     */
    function getSalt()
    {
        if (null === $this->salt) {
            $this->salt = md5(sprintf(
                '%s_%d_%f',
                uniqid(),
                rand(0, 99999),
                microtime(true)
            ));
        }

        return $this->salt;
    }
    
    /**
     * Unset the user's sensitive data.
     */
    function eraseCredentials()
    {
        $this->roles = null;
    }
    
    /**
     * Test if two user objects are equal.
     * @return bool.
     */
    function equals(AccountInterface $account)
    {        
        $user = $account;
        
        return $user->getUsername() == $this->getUsername();
    }
}
