<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => 'P1nt3ch@052016',
                    'dbname' => 'mailmarketing',
                    'driverOptions' => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES `UTF8`"
                    ],
                    'driver' => [
                        'MailMarketing_driver' => [
                            'class' => 'Doctrine\ORM\Mapping\Driver\YamlDriver',
                            'cache' => 'array',
                            'paths' => [__DIR__ . '/../../src/MailMarketing/Entity']
                        ],
                        'orm_default' => [
                            'drivers' => [
                                'MailMarketing\Entity' => 'MailMarketing_driver'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];