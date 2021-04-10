<?php

namespace MarcW\Heroicons;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MarcWHeroiconsBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new class extends Extension
        {
            public function load(array $configs, ContainerBuilder $container)
            {
                $container->register('twig.extensions.marcw_heroicons', HeroiconsExtension::class)->setTags(['twig.extension']);
            }
        };
    }
}
