<?php
// Backend/test_db.php
require'db.php';

// You can perform any database operations here to test the connection

try {
    $stmt = $pdo->query("SELECT 'Connection successful!' AS message");
    $result = $stmt->fetch();
    echo $result['message'];
} catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
}
