<?php

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__.'/src',
]);

return FrictionlessDigital\PhpStyles\styles($finder);
