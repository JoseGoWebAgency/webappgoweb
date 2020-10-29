<?php

namespace EventosModule;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;




class EventosModule implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}