<?php

namespace Application\JobeetBundle\Entity\Service;

use Application\JobeetBundle\Entity\Service\CategoryService,
    Application\JobeetBundle\Entity\JobeetCategory,
    Doctrine\ORM\EntityManager;

class JobeetCategoryService implements CategoryService
{
    private $_em;
    
    public function setEntityManager(EntityManager $em)
    {
        $this->_em = $em;
    }
    
    public function getActiveJobs(JobeetCategory $category)
    {
        return $this->_em->getRepository('JobeetBundle:JobeetJob')
                         ->getActiveJobs($category);
    }
}
