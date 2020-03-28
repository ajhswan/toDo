<?php

namespace ToDo\Controllers;

use Slim\Views\PhpRenderer;
use ToDo\Models\ToDoModel;

class InputToDoController
{
    private $renderer;
    private $toDoModel;

    public function __construct(PhpRenderer $renderer)
    {
        $this->renderer = $renderer;
//        $this->toDoModel = $toDoModel;
    }
    public function __invoke($request, $response, $args)
    {
        return $this->renderer->render($response, 'toDo.phtml', $args);

    }
}