<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(realpath(__DIR__ . '/src'))
    ->in(realpath(__DIR__ . '/tests'))
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([

        // PSR2_LEVEL
        '-braces',

        // SYMFONY_LEVEL
        '-concat_without_spaces',
        '-unalign_double_arrow',
        '-unalign_equals',

        // CONTRIB_LEVEL
        'align_double_arrow',
        'align_equals',
        'concat_with_spaces',
        'long_array_syntax',
        'no_blank_lines_before_namespace',
        'ordered_use',
    ])
    ->finder($finder)
;
