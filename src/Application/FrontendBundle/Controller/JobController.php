<?php

namespace Application\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Application\FrontendBundle\Form\JobForm,
    Application\JobeetBundle\Entity\JobeetJob,
    Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class JobController extends Controller
{
    /**
     * Create and index a new job.
     */
    public function newAction()
    {
        //Get the entity manager.
        $em = $this->get('doctrine.orm.entity_manager');                
            
        //Get the list of categories as an array.        
        $categories = $em->getRepository('JobeetBundle:JobeetCategory')
                         ->getCategoriesAsOptions();                      
        
        //Set up the form.
        $job = new JobeetJob();
        $form = JobForm::create($categories, $job, $this->get('validator'));        
       
        //If a POST, process the form and persist it if valid.
        $request = $this->get('request');
        if ('POST' === $request->getMethod()) {
            //Register an event subscriber to index the job.
            $em->getEventManager()->addEventSubscriber(new LuceneListener($this->get('lucene_search')));
                                    
            $params = $request->request->get('job');                                      
             
            //Get the category object.
            $params['category'] = $em->getReference('JobeetBundle:JobeetCategory', $params['category']); 
            
            //TODO:VALIDATE HERE
            
            //Get uploaded files and bind the form.
            $files = $request->files->get('job');                
            //unset($params['category_id']);
            $form->bind($params, $files);
        
            //If there is a logo uploaded, move it to the uploads dir.
            if($files['logo']['file']) {                
                $name = uniqid().'-'.$files['logo']['file']->getOriginalName();
                $files['logo']['file']->move($this->container->getParameter('frontend.logos_dir'));    
                $files['logo']['file']->rename($name);             
            }
            else {
                $name = '';
            }            
        
            //Set the logo filename and persist the entity.
            $job->setLogo($name);             
            $em->persist($job);            
            $em->flush();
        }
        
        return $this->render('FrontendBundle:Job:new.twig', array('form' => $form));
    }        
    
    /**
     * Detailed view of a job.
     * @param $company string company name
     * @param $location string job location
     * @param $id integer job ID
     * @param $position string position
     * @throws NotFoundHttpException
     */
    public function showAction($company, $location, $id, $position)
    {    
        $job = $this->get('doctrine.orm.entity_manager')
                    ->getRepository('JobeetBundle:JobeetJob')
                    ->getJobById($id);
    
        if(!$job) {
            throw new NotFoundHttpException('Job does not exist.');
        }
        
        return $this->render('FrontendBundle:Job:show.twig', array('job' => $job));      
    }
    
    /**
     * Edit a job.    
     * @param $id integer job ID
     * @throws NotFoundHttpException
     */
    public function editAction($id)
    {
        //Get the job and the list of categories to setup the form
        $em = $this->get('doctrine.orm.entity_manager');
        $job = $em->getRepository('JobeetBundle:JobeetJob')
                  ->getJobById($id);                
        
        if(!$job) {
            throw new NotFoundHttpException('Job does not exist.');
        }
        
        $categories = $em->getRepository('JobeetBundle:JobeetCategory')
                         ->getCategoriesAsOptions(); 
        
        //Create the form
        $form = JobForm::create($categories, $job, $this->get('validator'));
        
        return $this->render('FrontendBundle:Job:new.twig', array('form' => $form));            
    }
}
