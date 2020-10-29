<?php


namespace EventosModule;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\EventosController::class => InvokableFactory::class,
        ],
    ],

    //aki vai o router
    'router' => [
        'routes' => [
            'eventos' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/eventos[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\EventosController::class,
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