<?php

namespace MarcW\Heroicons;

final class Heroicons
{
    const STYLE_SOLID = 'solid';
    const STYLE_OUTLINE = 'outline';

    public static function get($icon, $style = self::STYLE_SOLID)
    {
        if (self::STYLE_SOLID !== $style && self::STYLE_OUTLINE !== $style) {
            throw new \LogicException(sprintf('Heroicons style "%s" is not available.', $style));
        }

        $path = sprintf('%s/%s/%s.svg', realpath(__DIR__ . '/../resources/heroicons'), $style, $icon);
        if (!is_readable($path)) {
            throw new \LogicException(sprintf('Heroicon "%s" in style "%s" cannot be found or is not readable.', $icon, $style));
        }

        return file_get_contents($path);
    }
}
