# Twig Heroicons

[![tests](https://github.com/marcw/twig-heroicons/actions/workflows/php.yml/badge.svg)](https://github.com/marcw/twig-heroicons/actions/workflows/php.yml)

This package provides an Heroicons integration for Twig.

## Install

Use composer:

```bash
composer require marcw/twig-heroicons
```

### Symfony

You do not need to do anything more to use the extension.

### Twig

If you use Twig directly, register the extension before using it:

```php
<?php

use MarcW\Heroicons\Twig\HeroiconsExtension;
use Twig\Environment;

$twig = new Environment(/* ... */);
$twig->addExtension(new HeroiconsExtension());
```

## Usage

This extension provides a `heroicon` function with this signature:

```jinja2
{{ heroicon(icon, class, style) }}

The default style is 'solid'
{{ heroicon('academy-cap') }}

Change to outline style
{{ heroicon('academy-cap', '', 'outline') }}

Customize the svg with some classes
{{ heroicon('academy-cap', 'text-green-200', 'outline') }}
```

## License

This library is MIT licensed.
