<?php

namespace Application\JobeetBundle\Tests;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\Mapping\Driver\YamlDriver;
use Application\JobeetBundle\JobeetBundle;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function createEntityManager()
    {
        $bundle = new JobeetBundle();
        $config = new Configuration();
        $config->setAutoGenerateProxyClasses(true);
        $config->setProxyDir(\sys_get_temp_dir());
        $config->setProxyNamespace('JobeetBundleTests\Entities');
        //$config->setMetadataDriverImpl($config->newDefaultAnnotationDriver());
        $config->setMetadataDriverImpl(new YamlDriver(array($bundle->getPath().'/Resources/config/doctrine/metadata/orm/')));
        $config->setQueryCacheImpl(new \Doctrine\Common\Cache\ArrayCache());
        $config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache());
        $config->addEntityNamespace('JobeetBundle', '\Application\JobeetBundle\Entity');
        $params = array(
            'driver' => 'pdo_mysql',
            'dbname' => 'jobeet2',
            'user' => 'root',
            'password' => 'root'
        );
        
        return EntityManager::create($params, $config);
    }
}
