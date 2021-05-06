<?php

namespace FrictionlessDigital\PhpStyles;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * @param  \PhpCsFixer\Finder $finder
 * @param  array              $rules
 * @return \PhpCsFixer\Config
 */
function styles(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require __DIR__ . '/rules.php', $rules);

    return (new Config())
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
