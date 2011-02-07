<?php

namespace Application\JobeetBundle\Entity;

use Application\JobeetBundle\Entity\Service\CategoryService;

/**
 * Application\JobeetBundle\Entity\JobeetCategory
 */
class JobeetCategory
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
     * @var string $slug
     */
    private $slug;

    /**
     * @var Application\JobeetBundle\Entity\JobeetAffiliate
     */
    private $affCategories;
    
    /**
     * @var Application\JobeetBundle\Entity\JobeetJob
     */
    private $jobs;
    
    private $activeJobs;
    
    private $activeJobsCount;

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
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add affCategories
     *
     * @param Application\JobeetBundle\Entity\JobeetAffiliate $affCategories
     */
    public function addAffCategories(\Application\JobeetBundle\Entity\JobeetAffiliate $affCategories)
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
     * @var Application\JobeetBundle\Entity\JobeetAffiliate
     */
    private $categoryAffiliates;

    /**
     * Add categoryAffiliates
     *
     * @param Application\JobeetBundle\Entity\JobeetAffiliate $categoryAffiliates
     */
    public function addCategoryAffiliates(\Application\JobeetBundle\Entity\JobeetAffiliate $categoryAffiliates)
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
    

    /**
     * Add jobs
     *
     * @param Application\JobeetBundle\Entity\JobeetJob $jobs
     */
    public function addJobs(\Application\JobeetBundle\Entity\JobeetJob $jobs)
    {
        $this->jobs[] = $jobs;
    }

    /**
     * Get jobs
     *
     * @return Doctrine\Common\Collections\Collection $jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }    
    
    /*
     * Get a list of active jobs that haven't expired.   
     */
    public function getActiveJobs()
    {        
        return $this->activeJobs;
    }
    
    public function setActiveJobs($jobs)
    {
        $this->activeJobs = $jobs;
    }
    
    public function getActiveJobsCount()
    {        
        return $this->activeJobsCount;
    }
    
    public function setActiveJobsCount($count)
    {
        $this->activeJobsCount = $count;
    }    
}