<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())->in(__DIR__);

return (new Config())
    ->setRules([
        '@PER-CS' => true,
        '@PHP82Migration' => true,
    ])
    ->setFinder($finder);
