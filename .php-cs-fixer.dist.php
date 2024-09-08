<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())->in(__DIR__);

return (new Config())
    ->setRules([
        '@PSR12' => true,
        // '@PHP82Migration' => true,
    ])
    ->setFinder($finder);
