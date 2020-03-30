<?php

namespace ToDo\Controllers;

use ToDo\Models\ToDoModel;

class DeleteToDoController
{
    private $toDoModel;

    public function __construct($toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {

    }
}