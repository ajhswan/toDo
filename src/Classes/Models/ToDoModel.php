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

    public function insertToDo(string $name, string $info, string $type): bool {
    $sqlInsert = $this->dbConnection->prepare("INSERT INTO toDoes (name, info, type)
              VALUES (:name, :info, :type)");
    $sqlInsert->bindParam(':name', $name);
    $sqlInsert->bindParam(':info', $info);
    $sqlInsert->bindParam(':type', $type);
    return $result = $sqlInsert->execute();
    }
}
