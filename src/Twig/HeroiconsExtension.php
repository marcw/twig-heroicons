<?php

namespace MarcW\Heroicons\Twig;

use MarcW\Heroicons\Heroicons;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class HeroiconsExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('heroicon', [$this, 'getHeroicon'], ['is_safe' => ['html']]),
        ];
    }

    public function getHeroicon(string $icon, string $class = '', string $style = Heroicons::STYLE_SOLID)
    {
        $svg = Heroicons::get($icon, $style);
        if (!$class) {
            return $svg;
        }

        return str_replace('<svg', sprintf('<svg class="%s"', $class), $svg);
    }
}
