<?php
// Backend/db.php
declare(strict_types=1);

use PDO;
use PDOException;

// Load sensitive data from environment variables (e.g., .env file or server configuration)
$host = getenv('DB_HOST') ?: 'localhost';
$db = getenv('DB_NAME') ?: 'loan_payment';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: 'K3nytt7&.';
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
    // Log detailed error message to a secure file
    error_log($e->getMessage(), 3, '/var/log/php_errors.log');

    // Display a generic error message to the user
    die('Database connection failed. Please contact your System Administrator');
}
