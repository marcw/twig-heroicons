<?php

namespace MarcW\Heroicons\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class MarcWHeroiconsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('twig.extensions.marcw_heroicons', HeroiconsExtension::class)->setTags(['twig.extension']);
    }
}
