<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - SalesForce Web-To-Lead',
    'description' => 'Send form data to SalesForce via form Web-To-Lead API',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.99.99',
            'dmf_distributor_request' => '4.0.0-4.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
