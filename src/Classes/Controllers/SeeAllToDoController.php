<?php

namespace ToDo\Controllers;

use ToDo\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class SeeAllToDoController
{
    private $renderer;
    private $toDoModel;

    public function __construct(PhpRenderer $renderer, ToDoModel $toDoModel)
    {
        $this->renderer = $renderer;
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['toDo'] = $this-> toDoModel->fetchAllToDoes();
        return $this->renderer->render($response, 'index.phtml', $args);
    }
}