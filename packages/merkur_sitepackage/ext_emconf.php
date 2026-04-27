<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Merkur Sitepackage',
    'description' => 'Site package extension for the Merkur professional landing page',
    'category' => 'templates',
    'author' => 'Merkur',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.99.99',
            'fluid_styled_content' => '13.0.0-13.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
