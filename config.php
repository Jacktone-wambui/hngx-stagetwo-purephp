<?php
// Database configuration
$host = 'localhost'; 
$dbname = 'hngxtwo'; 
$username = 'root'; 
$password = '';

// Create a new PDO instance
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}