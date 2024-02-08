<?php
function getCategories() : array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}
function createCategory(string $name, string $description) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into categories (name, description) values (:name, :description)");
    $statement->execute([
        ':name' => $name,
        ':description' => $description
    ]);

    return $statement->rowCount() > 0;
}
