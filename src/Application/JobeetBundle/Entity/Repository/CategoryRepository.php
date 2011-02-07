<?php

namespace Application\JobeetBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository,
    Doctrine\ORM\Query\QueryException;

/**
 * Doctrine repository class for the "Category" entity.
 */
class CategoryRepository extends EntityRepository
{
    /**
     * Get a list of categories that have active jobs.
     * @return array
     */
    public function getWithActiveJobs()
    {
        try {            
            $categories = $this->_em->createQuery('SELECT category FROM JobeetBundle:JobeetCategory category JOIN category.jobs job WHERE job.is_activated=1')
                                    ->getResult();
        }
        catch(QueryException $e) {
            return array();
        }
        
        return $categories;
    }
    
    /**
     * Get a list of all categories.
     * @return array
     */
    public function getCategories()
    {
        try {            
            $categories = $this->_em->createQuery('SELECT category FROM JobeetBundle:JobeetCategory category')
                                    ->getResult();
        }
        catch(QueryException $e) {
            return array();
        }
        
        return $categories;
    }
    
    /**
     * Builds an associative array to be used as an options array for form fields.
     * @return array
     */
    public function getCategoriesAsOptions()
    {
        $categoriesArr = array();
        foreach($this->getCategories() as $category) {
            $categoriesArr[$category->getId()] = $category->getName();
        }
        
        return $categoriesArr;
    }
    
    /**
     * Builds an associative array to be used as an options array for form fields.
     * @param $categoryId integer category ID 
     * @return Application\JobeetBundle\Entity\JobeetCategory
     */
    public function getCategoryById($categoryId)
    {
        try {            
            $category = $this->_em->createQuery('SELECT category FROM JobeetBundle:JobeetCategory category WHERE category.id = ?1')
                                  ->setParameter(1,$categoryId)    
                                  ->getSingleResult();
        }
        catch(QueryException $e) {
            return null;
        }
        
        return $category;
    }
}
