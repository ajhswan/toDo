<?php

namespace ToDo\Factories;

use ToDo\Models\ToDoModel;
use Psr\Container\ContainerInterface;

class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbConn = $container->get('dbConnection');
        return new ToDoModel($dbConn);
    }
}