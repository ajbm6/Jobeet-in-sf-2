<?php

namespace Application\JobeetBundle\Entity;

use Application\JobeetBundle\Utils\Jobeet;

/** 
 * Application\JobeetBundle\Entity\JobeetJob
 */ 
class JobeetJob
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string $company
     */
    private $company;

    /**
     * @var string $logo
     */
    private $logo;

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var string $position
     */
    private $position;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var text $how_to_apply
     */
    private $how_to_apply;

    /**
     * @var string $token
     */
    private $token;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var smallint $is_public
     */
    private $is_public;

    /**
     * @var smallint $is_activated
     */
    private $is_activated;

    /**
     * @var datetime $expires_at
     */
    private $expires_at;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var Application\JobeetBundle\Entity\JobeetCategory
     */
    private $category;

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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set company
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Get company
     *
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return string $logo
     */
    public function getLogo()
    {
        return $this->logo;
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
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set position
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return string $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set how_to_apply
     *
     * @param text $howToApply
     */
    public function setHowToApply($howToApply)
    {
        $this->how_to_apply = $howToApply;
    }

    /**
     * Get how_to_apply
     *
     * @return text $howToApply
     */
    public function getHowToApply()
    {
        return $this->how_to_apply;
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
     * Set is_public
     *
     * @param smallint $isPublic
     */
    public function setIsPublic($isPublic)
    {
        $this->is_public = $isPublic;
    }

    /**
     * Get is_public
     *
     * @return smallint $isPublic
     */
    public function getIsPublic()
    {
        return $this->is_public == 0 ? false : true;
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
     * Set expires_at
     *
     * @param datetime $expiresAt
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;
    }

    /**
     * Get expires_at
     *
     * @return datetime $expiresAt
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
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
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set category
     *
     * @param Application\JobeetBundle\Entity\JobeetCategory $category
     */
    public function setCategory(\Application\JobeetBundle\Entity\JobeetCategory $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Application\JobeetBundle\Entity\JobeetCategory $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    public function getCategoryId()
    {
        return $this->category ? $this->category->getId() : 0;
    }
    
    public function getCompanySlug()
    {
      return Jobeet::slugify($this->getCompany());
    }
     
    public function getPositionSlug()
    {
      return Jobeet::slugify($this->getPosition());
    }
     
    public function getLocationSlug()
    {
      return Jobeet::slugify($this->getLocation());
    }    
    
    public function initSysFields()
    {
        $now = new \DateTime();
        
        if(!$this->created_at) {
            $this->created_at = $now;
        }
        
        if(!$this->updated_at) {
            $this->updated_at = $now;
        }
        
        if(!$this->expires_at) {
            $this->expires_at = date_add($now, new \DateInterval('P30D'));
        }
        
        if(!$this->is_activated) {
            $this->is_activated = 1;
        }
        
        if(!$this->token) {
            $this->token = uniqid('job_');
        }
    }
}