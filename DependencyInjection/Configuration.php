<?php

namespace Newageerp\SfPermissions\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('nae_sfs_permissions');

        return $builder;
    }
}