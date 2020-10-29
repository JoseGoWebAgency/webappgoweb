<?php

namespace ClienteModule;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;




class ClienteModule implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}