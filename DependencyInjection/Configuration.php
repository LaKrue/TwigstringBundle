<?php
/*
 * (c) LaKrue <symfony@lakrue.com>
 */

namespace LaKrue\RenderStringBundle\DependencyInjection;

//use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * RenderString structure
 *
 * @author LaKrue <symfony@lakrue.com>
 */
class Configuration
{
    /**
     * Generates the configration tree builder
     */
    public function getConfigTree()
    {
    	$treeBuilder = new TreeBuilder();
    	$rootNode = $treeBuilder->root('la_krue_render_string', 'array')
            //->children()
                //->scalarNode('db_driver')->cannotBeOverwritten()->isRequired()->end()
            //->end()
        ->end();

		return $treeBuilder->buildTree();
    }
}
