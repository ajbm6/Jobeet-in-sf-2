<?php

namespace Application\FrontendBundle\Tests\DependencyInjection;

use Application\FrontendBundle\Tests\TestCase;
use Application\FrontendBundle\DependencyInjection\FrontendExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FrontendExtensionTest extends TestCase
{
    private $_container;
    private $_frontendExt;    
    
    public function setUp()
    {
        parent::setUp();
        
        $this->_container = new ContainerBuilder();
        $this->_frontendExt = new FrontendExtension();
    }
    
    public function testConfigLoadDefault()
    {        
        $this->_frontendExt->configLoad(array(), $this->_container);        
        $this->assertEquals(30, $this->_container->getParameter('frontend.active_days'));
    }
    
    public function testConfigLoadOverrideDefault()
    {        
        $this->_frontendExt->configLoad(array('active_days' => 20), $this->_container);        
        $this->assertEquals(20, $this->_container->getParameter('frontend.active_days'));
    }
}
