<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'SeeAllToDoController' );

    $app->get('/toDo', 'InputToDoController');
    $app->post('/toDo', 'InputToDoController');

//    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
//        // Sample log message
//        $container->get('logger')->info("Slim-Skeleton '/' route");
//
//        // Render index view
//        return $container->get('renderer')->render($response, 'index.phtml', $args);
//    });

};
