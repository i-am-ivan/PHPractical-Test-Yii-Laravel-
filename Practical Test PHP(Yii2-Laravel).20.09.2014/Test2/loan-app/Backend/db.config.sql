<?php
// Backend/db.php
declare(strict_types=1);

// Database credentials
$host = 'localhost';
$db = 'loan_management'; // Updated to the correct database name
$user = 'root'; // Use the correct username
$pass = 'K3nytt7&.'; // Use the correct password
$charset = 'utf8mb4';

// DSN setup
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Securely establish the database connection
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // Display a generic error message to the user
    die('ERROR! System error, contact your System Administrator.');
}
