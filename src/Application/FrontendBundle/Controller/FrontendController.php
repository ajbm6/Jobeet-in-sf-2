<?php

namespace Application\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Bundle\SearchBundle\SearchBundle;    

class FrontendController extends Controller
{
    /**
    * Display a list of categories with a sample of their active jobs.
    */
    public function indexAction()
    {            
        //Get the list of categories that have active jobs.
        $em = $this->get('doctrine.orm.entity_manager');
        $categories = $em->getRepository('JobeetBundle:JobeetCategory')
                         ->getWithActiveJobs();
                         
        //Get the active jobs of each category.
        $jobsRepo = $em->getRepository('JobeetBundle:JobeetJob');
        $jobs_per_category = $this->container->getParameter('frontend.jobs_per_category');
        foreach($categories as $category) {
            $category->setActiveJobs($jobsRepo->getActiveJobs($category, $jobs_per_category));
            $category->setActiveJobsCount($jobsRepo->getActiveJobsCount($category));
        }
        
        return $this->render('FrontendBundle:Frontend:index.twig', 
                             array('categories' => $categories, 'jobs_per_category' => $jobs_per_category));
    }   
    
    
    /**
     * Search the Lucene index and display the list of matches if any.
     */
    public function searchAction()
    {              
        //Search the index.
        $search = $this->get('lucene_search');
        $hits = $search->find($this->get('request')->query->get('keywords'));               
        
        //Get a list of all job IDs from the search matches.
        $pks = array();
        foreach($hits as $hit) {
            $pks[] = $hit->pk;
        }        
        
        //Given the IDs, get the jobs from the backend.
        $jobs = array();
        if(!empty($pks)) {
            $em = $this->get('doctrine.orm.entity_manager');
            $jobs = $em->getRepository('JobeetBundle:JobeetJob')
                       ->getJobsByIds($pks);
        }

        return $this->render('FrontendBundle:Frontend:search.twig', 
                                array('jobs' => $jobs));           
    }
}
