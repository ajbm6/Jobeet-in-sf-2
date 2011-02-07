<?php

namespace Application\JobeetBundle\Tests\Entity;

use Application\JobeetBundle\Tests\TestCase;
use Application\JobeetBundle\Entity\JobeetJob;

class JobeetJobTest extends TestCase
{
    private $_job;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->_job = new JobeetJob();        
    }
    
    public function testSlugifyCompanyName()
    {
        $this->_job->setCompany('Sensio Labs');
        $this->assertEquals('sensio-labs', $this->_job->getCompanySlug());
    }
}
