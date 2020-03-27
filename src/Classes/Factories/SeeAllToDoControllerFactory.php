<?php

namespace ToDo\Factories;

use ToDo\Controllers\SeeAllToDoController;
use Psr\Container\ContainerInterface;

class SeeAllToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $toDoModel = $container->get('ToDoModel');
        return new SeeAllToDoController($renderer, $toDoModel);
    }
}