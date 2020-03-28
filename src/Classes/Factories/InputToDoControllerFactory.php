<?php

namespace ToDo\Factories;

use ToDo\Controllers\InputToDoController;
use Psr\Container\ContainerInterface;

class InputToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        return new InputToDoController($renderer);
    }
}