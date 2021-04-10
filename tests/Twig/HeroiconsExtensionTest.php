<?php

namespace MarcW\Heroicons\Tests\Twig;

use PHPUnit\Framework\TestCase;
use MarcW\Heroicons\Twig\HeroiconsExtension;

class HeroiconsExtensionTest extends TestCase
{
    public function testGetHeroicon()
    {
        $extension = new HeroiconsExtension();
        $svg = $extension->getHeroicon('academic-cap');

        $this->assertSame(0, strpos($svg, '<svg xmlns'));
    }

    public function testGetHeroiconWithCustomClass()
    {
        $extension = new HeroiconsExtension();
        $svg = $extension->getHeroicon('academic-cap', 'foo bar');

        $this->assertSame(0, strpos($svg, '<svg class="foo bar" xmlns'));
    }
}
