<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    $container['dbConnection'] = function ($c) {
        $settings = $c->get('settings')['db'];
        $db = new \PDO($settings['host'] . $settings['dbName'], $settings['userName'], $settings['password']);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    };

    $container['SeeAllToDoController'] = new \ToDo\Factories\SeeAllToDoControllerFactory();
    $container['ToDoModel'] = new \ToDo\Factories\ToDoModelFactory();
    $container['InputToDoController'] = new \ToDo\Factories\InputToDoControllerFactory();
    $container['AddToDoController'] = new \ToDo\Factories\AddToDoControllerFactory();
};
