<?php

namespace Application\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Application\FrontendBundle\Controller\FrontendController;

class FrontendControllerTest extends WebTestCase
{
    private $_client;
    
    public function setUp()
    {
        $this->_client = $this->createClient();
        $this->_client->insulate();    
    }        
    
    public function testIndex()
    {     
        $this->_client->restart();
        $crawler = $this->_client->request('GET', '/frontend');
        $this->assertGreaterThan(0, count($crawler->filter('div.category')));    
    }    
    
    public function testNew()
    {
        $this->_client->restart();
        $crawler = $this->_client->request('GET', '/frontend/new');
        
        //Job info.
        $job['job[position]'] = 'Programmer - '.time();
        $job['job[company]'] = 'PHPUnit Test Company';
        $job['job[logo]'] = 'PHPUnit logo';
        $job['job[url]'] = 'http://www.phpunit.de';
        $job['job[location]'] = 'EA';
        $job['job[description]'] = 'from a unit test';
        $job['job[how_to_apply]'] = 'apply there';
        $job['job[type]'] = 'full-time';
        $job['job[email]'] = 'unittest@test.com';
        $job['job[is_public]'] = 1;
        $job['job[category]'] = 144;
        
        //Get the form and set the values we wanna post.
        $form = $crawler->selectButton('Save!')->form($job, 'POST');
                
        //Submit the form.
        $this->_client->restart();
        $crawler = $this->_client->submit($form);        
        
        //See if we have any errors on the page.
        $this->assertEquals(0, count($crawler->filter('ul'))); 
    }
}
