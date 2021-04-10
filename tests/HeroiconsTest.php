<?php

namespace MarcW\Heroicons\Tests;

use PHPUnit\Framework\TestCase;
use MarcW\Heroicons\Heroicons;

class HeroiconsTests extends TestCase
{
    public function testGet()
    {
        $svg = Heroicons::get('academic-cap', 'solid');

        $this->assertSame(0, strpos($svg, '<svg'));
    }

    public function testUnknownStyleThrowsException()
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Heroicons style "foobar" is not available.');

        Heroicons::get('academic-cap', 'foobar');
    }

    public function testUnknownIconThrowsException()
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Heroicon "foobar" in style "solid" cannot be found or is not readable.');

        Heroicons::get('foobar', 'solid');
    }
}
