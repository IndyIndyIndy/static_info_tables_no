<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (no)',
    'description' => 'Norwegian language pack for Static Info Tables.',
    'category' => 'misc',
    'version' => '6.4.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Mathias Bolt Lesniak',
    'author_email' => 'mathias@pixelant.no',
    'author_company' => 'Pixelant',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'static_info_tables' => '6.4.0-6.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
