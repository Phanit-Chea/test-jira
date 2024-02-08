<?php
function getProjects() : array
{
    global $connection;
    $statement = $connection->prepare("select project.id,project.name,project.post_id,posts.title from project inner join posts on project.post_id = posts.id order by project.id desc");
    $statement->execute();
    return $statement->fetchAll();
}
function createProject(string $name, int $post_id) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into project (name, post_id) values (:name, :post_id)");
    $statement->execute([
        ':name' => $name,
        ':post_id' => $post_id
    ]);

    return $statement->rowCount() > 0;
}
function getProject(int $id)
{
    global $connection;
    $statement = $connection->prepare("select * from project where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function updateProject(string $name, int $post_id, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update project set name = :name, post_id = :post_id where id = :id");
    $statement->execute([
        ':name' => $name,
        ':post_id' => $post_id,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}
function deleteProject(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from project where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}