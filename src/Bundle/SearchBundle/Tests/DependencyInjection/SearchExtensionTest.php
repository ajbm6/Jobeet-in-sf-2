<?php

/*
 * SearchBundle
 *
 * Richard D Shank <develop@zestic.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Bundle\SearchBundle\Tests\DependencyInjection;

use Bundle\SearchBundle\Tests\TestCase;
use Bundle\SearchBundle\DependencyInjection\LuceneExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SearchExtensionTest extends TestCase
{
    public function testLuceneConfig()
    {
        $container = new ContainerBuilder();
        $loader = new LuceneExtension();

        $loader->luceneConfig(array(), $container);
        $this->assertEquals('Bundle\\SearchBundle\\Lucene\\LuceneSearch', $container->getParameter('lucene.lucene.search'), '->luceneConfig() loads the lucene.xml file if not already loaded');

    }
}
