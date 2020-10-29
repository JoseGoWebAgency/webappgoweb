<?php


namespace ClienteModule;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ClienteController::class => InvokableFactory::class,
        ],
    ],

    //aqui vai o router
    'router' => [
        'routes' => [
            'cliente' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/cliente[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ClienteController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],


    'view_manager' => [
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
];