<?php

namespace ToDo\Models;

class ToDoModel
{
    private $dbConnection;

    public function __construct(\PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function fetchAllToDoes()
    {
        $query = $this->dbConnection->prepare('SELECT `name`, `info`, `type` FROM `toDoes`;');
        $query->execute();
        return $query->fetchAll();

    }
}
