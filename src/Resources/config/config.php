<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use MarcW\Heroicons\Twig\HeroiconsExtension;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('twig.extension.marcw_heroicons', HeroiconsExtension::class)
        ->tag('twig.extension');
};
