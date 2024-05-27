<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = intval($_POST['index']);
    $quantity = intval($_POST['quantity']);

    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$index])) {
        $_SESSION['cart'][$index]['quantity'] = $quantity;

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Item not found in cart.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>