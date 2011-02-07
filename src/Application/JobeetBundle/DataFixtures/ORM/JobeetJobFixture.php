<?php
use Doctrine\ORM\EntityManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Application\JobeetBundle\Entity;

class JobeetJobFixture implements FixtureInterface
{
  private $_data = array(
                      array('type' => 'full-time',
                            'company' => 'Sensio Labs',
                            'logo' => 'sensio-labs.gif',
                            'url' => 'http://www.sensiolabs.com/',
                            'position' => 'Web Developer',
                            'location' => 'Paris, France',
                            'description' => "You've already developed websites with symfony and you want to work
                                                with Open-Source technologies. You have a minimum of 3 years
                                                experience in web development with PHP or Java and you wish to
                                                participate to development of Web 2.0 sites using the best
                                                frameworks available.",
                            'how_to_apply' => 'Send your resume to fabien.potencier [at] sensio.com',
                            'is_public' => 'true',
                            'is_activated' => 'true',
                            'token' => 'job_sensio_labs',
                            'email' => 'job_sensio_labs',
                            'expires_at' => '2010-10-10',
                            'category' => 'Manager'                    
                      ),
                      
                      array('type' => 'part-time',
                            'company' => 'Extreme Sensio',
                            'logo' => 'extreme-sensio.gif',
                            'url' => 'http://www.extreme-sensio.com/',
                            'position' => 'Web Designer',
                            'location' => 'Paris, France',
                            'description' => "You've already developed websites with symfony and you want to work
                                                with Open-Source technologies. You have a minimum of 3 years
                                                experience in web development with PHP or Java and you wish to
                                                participate to development of Web 2.0 sites using the best
                                                frameworks available.",
                            'how_to_apply' => 'Send your resume to fabien.potencier [at] sensio.com',
                            'is_public' => 'true',
                            'is_activated' => 'false',
                            'token' => 'job_sensio_labs',
                            'email' => 'job_sensio_labs',
                            'expires_at' => '2010-10-10',
                            'category' => 'Design'                    
                      )
                   );
  
  public function load($manager)
  {
    foreach($this->_data as $record)
    {
      $job = new Entity\JobeetJob();
      $job->setType($record['type']);
      $job->setCompany($record['company']);  
      $job->setLogo($record['logo']); 
      $job->setPosition($record['position']); 
      $job->setLocation($record['location']); 
      $job->setDescription($record['description']); 
      $job->setUrl($record['url']); 
      
      $job->setHowToApply($record['how_to_apply']);
      $job->setIsPublic($record['is_public'] == 'true' ? 1 : 0);
      $job->setIsActivated($record['is_activated'] == 'true' ? 1 : 0);
      $job->setToken($record['token']);
      $job->setEmail($record['email']);
      $job->setExpiresAt(new DateTime($record['expires_at']));           
      $job->setCreatedAt(new DateTime());
      $job->setUpdatedAt(new DateTime());
      
      $category = $manager->createQuery("SELECT C FROM JobeetBundle:JobeetCategory C WHERE C.name = ?1")
                          ->setParameter(1,$record['category'])
                          ->getSingleResult();
                          
      $job->setCategory($category);
    
      $manager->persist($job);  
    }
    
    $manager->flush();  
  }
}
