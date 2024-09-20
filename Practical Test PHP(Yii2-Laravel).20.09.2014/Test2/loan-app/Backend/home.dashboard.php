<?php
// Start the session
session_start();

// Include the database connection file
require 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page if not logged in
    header('Location: ../index.php');
    exit();
}

// Retrieve the user id from the session
$userId = $_SESSION['id'];

// Retrieve the user details from the database
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :userId");
$stmt->bindParam(':userId', $userId);
$stmt->execute();

// Check if the query was successful
if ($stmt->rowCount() > 0) {
    // Fetch the user details
    $userDetails = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // Handle the error
    echo "Error retrieving user details";
    exit();
}

// Retrieve the total number of users
$stmt = $pdo->prepare("SELECT COUNT(*) as total_users FROM users");
$stmt->execute();
$totalUsers = $stmt->fetch(PDO::FETCH_ASSOC)['total_users'];

// Retrieve the total number of customers
$stmt = $pdo->prepare("SELECT COUNT(*) as total_customers FROM customers");
$stmt->execute();
$totalCustomers = $stmt->fetch(PDO::FETCH_ASSOC)['total_customers'];


