<?php

namespace MarcW\Heroicons\Tests\DependencyInjection;

use MarcW\Heroicons\DependencyInjection\MarcWHeroiconsExtension;
use MarcW\Heroicons\Twig\HeroiconsExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

class MarcWHeroiconsExtensionTest extends TestCase
{
    public function testLoad()
    {
        $container = new ContainerBuilder(new ParameterBag([
            'kernel.debug' => false,
        ]));
        $container->registerExtension(new MarcWHeroiconsExtension());
        $container->loadFromExtension('marc_w_heroicons');
        $container->getCompilerPassConfig()->setOptimizationPasses([]);
        $container->getCompilerPassConfig()->setRemovingPasses([]);
        $container->getCompilerPassConfig()->setAfterRemovingPasses([]);
        $container->compile();

        $this->assertEquals(HeroiconsExtension::class, $container->getDefinition('twig.extension.marcw_heroicons')->getClass());
    }
}
