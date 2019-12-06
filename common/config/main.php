<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'api' => [
            'class' => 'common\components\Api',
        ],
        'sakip' => [
            'class' => 'common\components\Sakip',
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'crud'   => [
                    'class' => 'common\generators\Generator',
                ],
                'crud1'   => [
                    'class' => 'common\generators_client\Generator',
                ],
            ]
        ],
    ],
];
