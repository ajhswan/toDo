<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'SeeAllToDoController' );
    $app->get('/toDo', 'InputToDoController');
    $app->post('/toDo', 'AddToDoController');
    $app->put('/toDo/{id}', 'DeleteToDoController' );

};
