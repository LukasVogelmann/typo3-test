<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Smedia News',
    'description' => '',
    'category' => 'news',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SchommerMedia\\SmediaNews\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lukas Vogelmann-Lyon',
    'author_email' => 'l.vogelmann@schommer-media.de',
    'author_company' => 'Schommer-Media',
    'version' => '1.0.0',
];
