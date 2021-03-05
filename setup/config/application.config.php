<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Laminas\Di\InjectorInterface;
use Magento\Setup\Mvc\Bootstrap\InitParamListener;

return [
    'modules' => require __DIR__ . '/modules.config.php',
    'module_listener_options' => [
        'module_paths' => [
            __DIR__ . '/../src',
        ],
        'config_glob_paths' => [
            __DIR__ . '/autoload/{,*.}{global,local}.php',
        ],
    ],
    'listeners' => [
        InitParamListener::class
    ],
    'service_manager' => [
        'factories' => [
            InitParamListener::BOOTSTRAP_PARAM => InitParamListener::class,
        ],
    ]
];
