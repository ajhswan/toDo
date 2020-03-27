<?php

function displayToDo(array $toDo): string{
    $result = '';

    foreach ($toDo as $item) {

        $result .= "<div class='container'>";
        $result .= "<h2>" . $item['name'] . "</h2>";
        $result .= "<p>" . $item['info'] . "</p>";
        $result .= "<h4>" . $item['type'] . "</h4>";
        $result .= "<button class='btnEdit'>Edit</button>";
        $result .= "<button class='btnDelete'>Delete</button>";
        $result .= "<button class='btnComplete'>Complete</button>";
        $result .= "</div>";
    }
     return $result;
}