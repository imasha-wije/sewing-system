<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $index = intval($_POST['index']); // Ensure the index is an integer

    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$index])) {
        // Remove the item from the cart
        unset($_SESSION['cart'][$index]);

        // Reindex the array to prevent gaps
        $_SESSION['cart'] = array_values($_SESSION['cart']);

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Item not found in cart.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>