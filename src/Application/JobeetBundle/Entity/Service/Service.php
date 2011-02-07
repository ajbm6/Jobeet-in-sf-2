<?php

namespace Application\JobeetBundle\Entity\Service;

use Doctrine\ORM\EntityManager;

interface Service
{
    public function setEntityManager(EntityManager $em);
}
