<p align="center"><img src="./resources/docs/gramma.png"></p>

# FLS :: PHP Styles
FLS Shared PHP style rules for PHP-CS-Fixer

## Installation

Via Composer:

The package is public, but is not published in Packagist. You need to add it directly to `composer.json` `repositories` key:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:fls/php-styles.git"
    },
],
```

> N.B.:
>
> For local development copy, update the location of the package in `composer.json`
> (assuming you cloned the package to `~\Code\fls`):
```json
    "repositories": [
        {
            "type": "path",
            "url": "~/Code/fls/php-styles",
            "symlink": true
        },
    ],
```

and then run

```bash
composer require fls/php-styles --dev
```

It will add the package to the `require-dev` block of your `composer.json`.

You can also add it manually, like this, to get the latest version:

```json
    "require-dev": {
        "fls/php-styles": "dev-master"
    },
```

## Integration

PHP-CS-Fixer is going to expect your configuration to be in a `/.php_cs.dist` file.

```php
<?php

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__.'/app',
    __DIR__.'/config',
    __DIR__.'/database',
    __DIR__.'/routes',
    __DIR__.'/tests',
]);

return Fls\PhpStyles\styles($finder);
```

## Usage

And now you can run the fix like this:
```bash
./vendor/bin/php-cs-fixer fix
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email cyrill@frictionlesssolutions.com instead of using the issue tracker.

## Credits

- [Cyrill N Kalita][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/nickfls
[link-contributors]: ../../contributors
