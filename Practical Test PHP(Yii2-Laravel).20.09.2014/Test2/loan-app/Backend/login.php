<?php

session_start();

require 'db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query to find the user
    $stmt = $pdo->prepare("SELECT id, username, password, role FROM users WHERE email = :email AND is_active = TRUE");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    // Check if the user exists and the password is correct (plaintext)
    if ($user && $user['password'] === $password) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Pass user id to dashboard through the session
        # $_SESSION['id'] = $user['id'];

        // Redirect to dashboard
        header('Location: ../Frontend/dashboard.php');
        exit();
    } else {
        $_SESSION['error_message'] = "Invalid email or password.";
        header('Location: ../index.php');
        exit();
    }
}
