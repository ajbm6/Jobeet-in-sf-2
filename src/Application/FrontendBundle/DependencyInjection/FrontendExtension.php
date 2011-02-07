<?php
namespace Application\FrontendBundle\DependencyInjection;
 
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class FrontendExtension extends Extension
{  
    public function configLoad($config, ContainerBuilder $container)
    {    
        //Load default values.
        if(is_file(__DIR__.'/../Resources/config/config.yml')) {
            $loader = new YamlFileLoader($container, __DIR__.'/../Resources/config');
            $loader->load(__DIR__.'/../Resources/config/config.yml');
        }
        
        //Override default values.
        $alias = $this->getAlias();
        foreach($config as $key => $value) {
            $container->setParameter($alias.'.'.$key,$value);        
        }
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
        return 'frontend';
    }
}
