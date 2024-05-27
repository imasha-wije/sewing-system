<?php
session_start();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['selectedItems']) && is_array($data['selectedItems'])) {
        $selectedItems = $data['selectedItems'];

        // Process the order with the selected items
        $orderedItems = [];
        foreach ($selectedItems as $index) {
            if (isset($_SESSION['cart'][$index])) {
                $orderedItems[] = $_SESSION['cart'][$index];
            }
        }

        // Clear the ordered items from the cart
        foreach ($selectedItems as $index) {
            unset($_SESSION['cart'][$index]);
        }

        // Re-index the cart array to remove gaps
        $_SESSION['cart'] = array_values($_SESSION['cart']);

        // Prepare order details
        $orderDetails = [];
        foreach ($orderedItems as $item) {
            $orderDetails[] = [
                'description' => $item['description'],
                 'color' => $item['color'],
                 'material' => $item['material'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['price'] * $item['quantity']
            ];
        }

        echo json_encode([
            'success' => true,
            'message' => 'Order placed successfully!',
            'orderDetails' => $orderDetails
        ]);
        exit();
    }
}

echo json_encode(['success' => false, 'message' => 'Invalid request.']);
?>