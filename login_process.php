<?php
session_start();
require "database/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query the database to check user credentials
    $stmt = $connection->prepare("SELECT id, email, password,phone FROM users WHERE email = :email");
    $stmt->execute([':email'=>$email]);
    $user = $stmt->fetch();
    
    // Verify the password without hashing
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION["user_id"] = $user['id'];
        $_SESSION["email"] = $user['email'];
        $_SESSION["password"] = $user['password'];
        $_SESSION["phone"] = $user['phone'];

        // Redirect to the dashboard
        header("Location: /");
        exit;
    } else {
        // Invalid credentials, redirect to the login page with an error message
        header("Location: login.php?error=1");
        exit;
    }
} else {
    // Redirect to the login page if the form is not submitted
    header("Location: login.php");
    exit;
}
?>
