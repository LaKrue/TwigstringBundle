<?php
/*
 * (c) LaKrue <symfony@lakrue.com>
 */

namespace LaKrue\RenderStringBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * RenderString structure
 *
 * @author LaKrue <symfony@lakrue.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configration tree builder
     */
    public function getConfigTreeBuilder()
    {
    	$treeBuilder = new TreeBuilder();
    	$rootNode = $treeBuilder->root('renderstring');

		return $treeBuilder;
    }
}
