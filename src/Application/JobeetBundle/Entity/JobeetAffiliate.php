<?php

namespace Application\JobeetBundle\Entity;

/**
 * Application\JobeetBundle\Entity\JobeetAffiliate
 */
class JobeetAffiliate
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $token
     */
    private $token;

    /**
     * @var smallint $is_activated
     */
    private $is_activated;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var Application\JobeetBundle\Entity\JobeetCategory
     */
    private $affCategories;

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
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
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
     * Set token
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Get token
     *
     * @return string $token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set is_activated
     *
     * @param smallint $isActivated
     */
    public function setIsActivated($isActivated)
    {
        $this->is_activated = $isActivated;
    }

    /**
     * Get is_activated
     *
     * @return smallint $isActivated
     */
    public function getIsActivated()
    {
        return $this->is_activated;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Add affCategories
     *
     * @param Application\JobeetBundle\Entity\JobeetCategory $affCategories
     */
    public function addAffCategories(\Application\JobeetBundle\Entity\JobeetCategory $affCategories)
    {
        $this->affCategories[] = $affCategories;
    }

    /**
     * Get affCategories
     *
     * @return Doctrine\Common\Collections\Collection $affCategories
     */
    public function getAffCategories()
    {
        return $this->affCategories;
    }
    /**
     * @var Application\JobeetBundle\Entity\JobeetCategory
     */
    private $categoryAffiliates;

    /**
     * Add categoryAffiliates
     *
     * @param Application\JobeetBundle\Entity\JobeetCategory $categoryAffiliates
     */
    public function addCategoryAffiliates(\Application\JobeetBundle\Entity\JobeetCategory $categoryAffiliates)
    {
        $this->categoryAffiliates[] = $categoryAffiliates;
    }

    /**
     * Get categoryAffiliates
     *
     * @return Doctrine\Common\Collections\Collection $categoryAffiliates
     */
    public function getCategoryAffiliates()
    {
        return $this->categoryAffiliates;
    }
}