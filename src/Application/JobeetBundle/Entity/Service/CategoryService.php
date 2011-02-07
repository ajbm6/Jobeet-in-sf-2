<?php

namespace Application\JobeetBundle\Entity\Service;

use Application\JobeetBundle\Entity\JobeetCategory,
    Application\JobeetBundle\Entity\Service\Service;

interface CategoryService extends Service
{
    public function getActiveJobs(JobeetCategory $category);
}
