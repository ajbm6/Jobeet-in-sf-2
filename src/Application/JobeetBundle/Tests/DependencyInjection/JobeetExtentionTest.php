<?php

namespace Application\FrontendBundle\Tests\DependencyInjection;

use Application\JobeetBundle\Tests\TestCase,
    Application\JobeetBundle\DependencyInjection\JobeetExtension,
    Symfony\Component\DependencyInjection\ContainerBuilder;

class JobeetExtentionTest extends TestCase
{
    private $_container;
    private $_jobeetExt;    
    
    public function setUp()
    {
        parent::setUp();
        
        $this->_container = new ContainerBuilder();
        $this->_jobeetExt = new JobeetExtension();
    }
    
    public function testConfigLoad()
    {        
        $this->_jobeetExt->configLoad(array(), $this->_container);        
        $this->assertInstanceOf('Application\JobeetBundle\Entity\Service\CategoryService', 
                                $this->_container->get('category_service'));
    }
}
