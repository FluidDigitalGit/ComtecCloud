<?php
return [
    'backend' => [
        'frontName' => 'admin_i1s81i'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'checkout' => [
        'async' => 0,
        'deferred_total_calculating' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => 'localhost',
                'dbname' => 'comtec_fresh_setup',
                'username' => 'root',
                'password' => 'root',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null
            ],
            'default' => [
                'host' => 'localhost',
                'dbname' => 'comtec_fresh_setup',
                'username' => 'root',
                'password' => 'root',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '72b1c34e56526268b55e473f11de1455'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'd5f_'
            ],
            'page_cache' => [
                'id_prefix' => 'd5f_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'comtec.local'
    ],
    'install' => [
        'date' => 'Thu, 12 May 2022 08:56:58 +0000'
    ]
];
