<?php

namespace Application\JobeetBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository,
    Doctrine\ORM\Query\QueryException;

/**
 * Doctrine repository class for the "Job" entity.
 */
class JobRepository extends EntityRepository
{
    private static $types = array('full-time' => 'Full time', 'part-time' => 'Part time');
    
    /**
     * Return a list of job types.
     * @return array
     */
    public static function getJobType()
    {
        return self::$types;
    }    
    
    /**
     * Lookup a job entity by ID.
     * @param $id integer Job ID
     * @return Application\JobeetBundle\Entity\JobeetJob
     */
    public function getJobById($id)
    {
        try {
            $job = $this->_em->createQuery('SELECT job FROM JobeetBundle:JobeetJob job WHERE job.id = ?1')
                             ->setParameter(1,$id) 
                             ->getSingleResult();
        }
        catch(QueryException $e) {
            return null;
        }
        
        return $job;
    }    
    
    /**
     * Build Doctrine query to get a list of active jobs for a given category.
     * @param $category Application\JobeetBundle\Entity\JobeetCategory category
     * @return Doctrine\ORM\Query
     */
    public function getActiveJobsQuery($category)
    {
         //TODO: AND job.expires_at > ?2 ->setParameter(2,date('Y-m-d H:i:s', time()))     
        return $this->_em->createQuery('SELECT job FROM JobeetBundle:JobeetJob job WHERE job.category = ?1 AND job.is_activated=1  ORDER BY job.expires_at DESC')
                         ->setParameter(1,$category);
    }
    
    /**
     * Get a list of active jobs for a given category.
     * @param $category Application\JobeetBundle\Entity\JobeetCategory Job ID
     * @return array
     */
    public function getActiveJobs($category, $limit=null)
    {
        try {            
            $query = $this->getActiveJobsQuery($category);
            if($limit) {
                $query->setMaxResults($limit);
            }
            
            $jobs = $query->getResult();
        }
        catch(QueryException $e) {
            return array();
        }
        
        return $jobs;
    }   
    
    /**
     * Count the number of active jobs for a given category.
     * @param $category Application\JobeetBundle\Entity\JobeetCategory Job ID
     * @return integer
     */
    public function getActiveJobsCount($category)
    {
        try {
            $count = $this->_em->createQuery('SELECT COUNT(job.id) FROM JobeetBundle:JobeetJob job WHERE job.category = ?1 AND job.is_activated=1')
                               ->setParameter(1,$category)
                               ->getSingleScalarResult(); 
        }
        catch(QueryException $e) {
            return 0;
        }
        
        return $count;
    }
    
    /**
     * Build a Doctrine query to get a list of jobs given their IDs.
     * @param $ids array list of job IDs
     * @return Doctrine\ORM\Query
     */
    public function getJobsByIdsQuery($ids)
    {
        return $this->_em->createQuery('SELECT job FROM JobeetBundle:JobeetJob job WHERE job.id IN (?1)')
                         ->setParameter(1,implode(',', $ids));
    }
    
    /**
     * Get a list of jobs given their IDs.
     * @param $ids array list of job IDs
     * @return array
     */
    public function getJobsByIds($ids)
    {
        try {        
            $jobs = $this->getJobsByIdsQuery($ids)
                         ->getResult();
        }
        catch(QueryException $e) {
            return array();
        }
        
        return $jobs;
    }
}
