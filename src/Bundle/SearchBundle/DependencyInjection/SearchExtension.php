<?php

namespace Bundle\SearchBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/*
 * SearchBundle
 *
 * Richard D Shank <develop@zestic.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Lucene
 *
 * @author Richard D Shank <develop@zestic.com>
 */
class SearchExtension extends Extension
{
    protected $resources = array(
        'lucene' => 'lucene.xml',
    );

    /**
     * Loads the logger configuration.
     *
     * Usage example:
     *
     *      <lucene:config path="/path/to/index" />
     *
     * @param array            $config    An array of configuration settings
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function configLoad($config, ContainerBuilder $container)
    {
        if (!$container->hasDefinition('lucene.config')) {
            $loader = new XmlFileLoader($container, __DIR__.'/../Resources/config');
            $loader->load($this->resources['lucene']);
            $container->setAlias('lucene', 'lucene.config');
        }

        if (isset($config['path'])) {
            $container->setParameter('lucene.index.path', $config['path']);
        }
         if (isset($config['analyzer'])) {
            $container->setParameter('lucene.analyzer', $config['analyzer']);
        }
    }


    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://www.symfony-project.org/schema/dic/zend';
    }

    public function getAlias()
    {
        return 'lucene';
    }
}
