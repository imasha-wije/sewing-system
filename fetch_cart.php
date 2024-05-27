<?php
session_start();

// Database connection
$host = 'localhost';
$db = 'sewing_system';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

// Fetch cart items
$stmt = $pdo->prepare("SELECT * FROM cart");
$stmt->execute();
$cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($cartItems);
?>
