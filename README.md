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

This extension provides a `heroicon` function that outputs the icon SVG.

```jinja2
{# function signature #}
{{ heroicon(icon, class, style) }}

{# the default style is 'solid' #}
{{ heroicon('academic-cap') }}

{# use the 'outline' style #}
{{ heroicon('academic-cap', '', 'outline') }}

{# Add a custom class to the SVG #}
{{ heroicon('academic-cap', 'text-green-200', 'outline') }}
```

## License

This library is MIT licensed.
