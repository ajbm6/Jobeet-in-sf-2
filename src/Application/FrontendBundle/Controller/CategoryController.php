<?php

namespace Application\FrontendBundle\Controller;

use Zend\Paginator\Paginator,
    Symfony\Bundle\FrameworkBundle\Controller\Controller,
    DoctrineExtensions\Paginate\PaginationAdapter,
    Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryController extends Controller
{
    public function showAction($id,$slug,$page)
    {    
        $em = $this->get('doctrine.orm.entity_manager');
        $category = $em->getRepository('JobeetBundle:JobeetCategory')
                       ->getCategoryById($id);                

        if(!$category) {
            throw new NotFoundHttpException('Category does not exist.');
        }
        
        //Setup the paginator
        $query = $em->getRepository('JobeetBundle:JobeetJob')
                    ->getActiveJobsQuery($category);
        $adapter = new PaginationAdapter($query);
        $paginator = new Paginator($adapter);        
        $paginator->setItemCountPerPage($this->container->getParameter('frontend.jobs_per_page'));
        $paginator->setCurrentPageNumber($page);        

        return $this->render('FrontendBundle:Category:show.twig', 
                               array('category' => $category, 'paginator' => $paginator));                 
    }
}
