<?php

namespace Application\JobeetBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension,
    Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
    
class JobeetExtension extends Extension
{
    public function configLoad($config, ContainerBuilder $container)
    {   
        $loader = new YamlFileLoader($container, __DIR__.'/../Resources/config');
        $loader->load('config.yml');
    }

    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/';
    }

    public function getNamespace()
    {
        return 'http://www.example.com/symfony/schema/';
    }

    public function getAlias()
    {
        return 'jobeet';
    }
}    
