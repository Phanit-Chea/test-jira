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
function getCategory(int $id)
{
    global $connection;
    $statement = $connection->prepare("select * from categories where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
function deleteCategory(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}
function updateCategory(string $name, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update categories set name = :name, description = :description where id = :id");
    $statement->execute([
        ':name' => $name,
        ':description' => $description,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}