<?php

namespace ToDo\Factories;

use ToDo\Controllers\AddToDoController;
use Psr\Container\ContainerInterface;

class AddToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $toDoModel = $container->get('ToDoModel');
        return new AddToDoController($toDoModel);

    }
}