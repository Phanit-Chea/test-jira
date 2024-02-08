<?php
function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}
function createUser(string $email, string $password,string $phone) : bool
{
    global $connection;
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $statement = $connection->prepare("insert into users (email, password,phone) values (:email, :password,:phone)");
    $statement->execute([
        ':email' => $email,
        ':password' => $hashedPassword,
        ':phone' => $phone,
    ]);

    return $statement->rowCount() > 0;
}