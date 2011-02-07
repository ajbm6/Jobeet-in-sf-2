<?php
use Doctrine\ORM\EntityManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Application\JobeetBundle\Entity;

class JobeetCategoryFixture implements FixtureInterface
{
  private $_data = array(
                      array('name'=>'Design','slug'=>'Design'),
                      array('name'=>'Manager','slug'=>'Manager'),
                      array('name'=>'Administrator','slug'=>'Administrator'),
                   );
  
  public function load($manager)
  {
    foreach($this->_data as $record)
    {
      $category = new Entity\JobeetCategory();
      $category->setName($record['name']);
      $category->setSlug($record['slug']);  
    
      $manager->persist($category);  
    }
    
    $manager->flush();  
  }
}
