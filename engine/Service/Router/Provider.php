<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{    
    /**
     * serviceName
     *
     * @var string
     */
    public $serviceName = 'router';

    public function init()
    {
        $router = new Router('http://localhost:8000/');
        $this->di->set($this->serviceName, $router);
    }
}
