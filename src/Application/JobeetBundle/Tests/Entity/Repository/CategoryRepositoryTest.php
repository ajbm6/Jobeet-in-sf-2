<?php

namespace Application\JobeetBundle\Tests\Entity;

use Application\JobeetBundle\Tests\TestCase;
use Application\JobeetBundle\Entity\JobeetCategory;
use Application\JobeetBundle\Entity\Repository\CategoryRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryRepositoryTest extends TestCase
{
    public function categoriesWithJobs()
    {    
        $categories = array('Design','Manager');
        return array(
                array($categories),
               );
    }    
    
    /** @dataProvider categoriesWithJobs */
    public function testGetCategories($expected)
    {
        $em = $this->createEntityManager();
        $this->assertEquals($expected, $em->getRepository('JobeetBundle:JobeetCategory')->getCategories());
    }
}
