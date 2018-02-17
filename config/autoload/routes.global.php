<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\AuraRouter::class,
            MailMarketing\Action\PingAction::class => MailMarketing\Action\PingAction::class,
        ],
        'factories' => [
            MailMarketing\Action\HomePageAction::class => MailMarketing\Action\HomePageFactory::class,
            MailMarketing\Action\TestePageAction::class => MailMarketing\Action\TestePageFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => MailMarketing\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => MailMarketing\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'teste',
            'path' => '/teste',
            'middleware' => MailMarketing\Action\TestePageAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
