<?php

namespace ToDo\Controllers;

use ToDo\Models\ToDoModel;

class AddToDoController
{
    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $name = $_POST['name'];
        $info = $_POST['info'];
        $type = $_POST['type'];

        $args['addToDo'] = $this->toDoModel->insertToDo($name, $info, $type);
        return $response->withRedirect('/');
    }
}