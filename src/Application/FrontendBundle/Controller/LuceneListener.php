<?php

namespace Application\FrontendBundle\Controller;

use Doctrine\Common\EventSubscriber,
    Doctrine\ORM\Events,
    Doctrine\ORM\Event\LifecycleEventArgs,
    Doctrine\ORM\EntityManager,    
    Application\JobeetBundle\Entity\JobeetJob,
    Bundle\SearchBundle\Lucene\Document,
    Bundle\SearchBundle\Lucene\Field;

class LuceneListener implements EventSubscriber
{
    private $_lucene;
    
    public function __construct($lucene)
    {
        //Get the lucene service from the config.
        $this->_lucene = $lucene;
    }

    public function getSubscribedEvents()
    {
        return array(Events::postPersist);
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        if ($entity instanceof JobeetJob) {                
            //Create a new doc for the entity.               
            $document = new Document();
            $document->addField(Field::Keyword('pk', $entity->getId()));
            $document->addField(Field::UnStored('position', $entity->getPosition(), 'utf-8'));
            $document->addField(Field::UnStored('company', $entity->getCompany(), 'utf-8'));
            $document->addField(Field::UnStored('location', $entity->getLocation(), 'utf-8'));
            $document->addField(Field::UnStored('description', $entity->getDescription(), 'utf-8'));
 
            //Add the document to the index.
            $this->_lucene->addDocument($document);
            $this->_lucene->updateIndex(); 
        }
    }
}
