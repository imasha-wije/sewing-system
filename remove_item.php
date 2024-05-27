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

$index = intval($_POST['index']);
if (isset($_SESSION['cart'][$index])) {
    // Get the description of the item to be removed
    $description = $_SESSION['cart'][$index]['description'];

    // Prepare and execute the SQL statement to delete the item from the database based on description
    $stmt = $pdo->prepare("DELETE FROM cart WHERE description = :description Limit 1");
    $stmt->execute(['description' => $description]);

    // Remove the item from the session cart
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Item not found in the cart.']);
}
?>
