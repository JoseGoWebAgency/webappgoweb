<?php


namespace ServicosModule;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ServicosController::class => InvokableFactory::class,
        ],
        //aki vai o router

        'router' => [
            'routes' => [
                'servicos' => [
                    'type'    => Segment::class,
                    'options' => [
                        'route' => '/servicos[/:action[/:id]]',
                        'constraints' => [
                            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            'id'     => '[0-9]+',
                        ],
                        'defaults' => [
                            'controller' => Controller\ServicosController::class,
                            'action'     => 'index',
                        ],
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