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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    // Get other posted values
    $item = [
        'description' => htmlspecialchars($_POST['product_description']),
        'price' => intval($_POST['product_price']),
        'quantity' => intval($_POST['quantity']),
        'color' => htmlspecialchars($_POST['color']),
        'material' => htmlspecialchars($_POST['material']),
        'image' =>htmlspecialchars($_POST['product-image'])// Store uploaded image path
    ];


    // Insert item into database
    $stmt = $pdo->prepare("INSERT INTO cart (description, price, quantity, color, material, image) VALUES (:description, :price, :quantity, :color, :material, :image)");
    $stmt->execute($item);

    // Add item to session cart for displaying in the HTML table
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $item;
    

   

    echo json_encode(['success' => true]);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.jpeg">

    <!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


</head>
<body>
    <div class="container mt-5">
        <h2><center>My Cart</center></h2>
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Color</th>
                        <th>Material</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($_SESSION['cart'] as $index => $item) {
                    $total = $item['price'] * $item['quantity'];
                    ?>
                    <tr>
                        
                        <td><img src="<?php echo htmlspecialchars($item['image']); ?>" alt="Product Image" style="width: 50px; height: 50px;"></td>
                        <td><?php echo htmlspecialchars($item['description']); ?></td>
                        <td><?php echo "Rs." . number_format($item['price'],2); ?></td>
                        <td><input type="number" value="<?php echo intval($item['quantity']); ?>" min="1" data-index="<?php echo $index; ?>" class="form-control quantity"></td>
                        <td><?php echo "Rs." . number_format($total,3); ?></td>
                        <td><?php echo htmlspecialchars($item['color']); ?></td>
                        <td><?php echo htmlspecialchars($item['material']); ?></td>
                        <td><button class="btn btn-danger remove-item" data-index="<?php echo $index; ?>">Remove</button></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <button id="place-order" class="btn btn-primary">Place Order</button>
            <?php
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
    </div>
     <!-- Order Modal -->
    <!-- <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Place Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>  -->
                <div class="modal-body">
                    <form id="orderForm">
                        <div class="form-group">
                            <label for="customerName">Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName" required>
                        </div>
                        <div class="form-group">
                            <label for="customerAddress">Address</label>
                            <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="customerPhone">Telephone</label>
                            <input type="text" class="form-control" id="customerPhone" name="customerPhone" required>
                        </div>
                        <input type="hidden" name="selectedItems" id="selectedItems">
                    </form>
                </div> 
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="addto_cart.php">Close</a></button>
                    <button type="button" class="btn btn-primary" id="submitOrder">Submit Order</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Receipt Modal -->
    <div class="modal fade" id="receiptModal" tabindex="-1" aria-labelledby="receiptModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="receiptModalLabel">Order Receipt</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="receipt-details">
                        <!-- Receipt details will be dynamically inserted here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="print-receipt" class="btn btn-primary">Print Receipt</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the place-order button
    document.getElementById('place-order').addEventListener('click', function(event) {
        event.preventDefault();

        // Collect indices of items in the cart
        var selectedItems = [];
        document.querySelectorAll('input.quantity').forEach(function(input) {
            selectedItems.push(input.getAttribute('data-index'));
        });

        // Send data to place_order.php using fetch API
        fetch('place_order.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ selectedItems: selectedItems })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                console.log(data.orderDetails);
                // Populate and show the receipt modal
                populateReceipt(data.orderDetails);
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    // Add event listeners to the remove buttons
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var index = this.getAttribute('data-index');
            // Handle item removal logic here
        });
    });

    // Function to populate the receipt details
    function populateReceipt(orderDetails) {
        var receiptHtml = '<table class="table">';
        receiptHtml += '<thead><tr><th>Description</th><th>Color</th><th>Material</th><th>Quantity</th><th>Price</th><th>Total</th></tr></thead><tbody>';
        var totalPrice = 0;

        orderDetails.forEach(function(item) {
            var itemTotal = item.price * item.quantity;
            receiptHtml += '<tr>';
            receiptHtml += '<td>' + item.description + '</td>';
            receiptHtml += '<td>' + item.color + '</td>';
            receiptHtml += '<td>' + item.material + '</td>';
            receiptHtml += '<td>' + item.quantity + '</td>';
            receiptHtml += '<td>Rs.' + item.price.toFixed(2) + '</td>';
            receiptHtml += '<td>Rs.' + itemTotal.toFixed(2) + '</td>';
            receiptHtml += '</tr>';
            totalPrice += itemTotal;
        });

        receiptHtml += '</tbody></table>';
        receiptHtml += '<p><strong>Total Price: Rs ' + totalPrice.toFixed(2) + '</strong></p>';

        $('#receipt-details').html(receiptHtml);
        $('#receiptModal').modal('show');
    }

    // Print button functionality
    $('#print-receipt').click(function() {
        var printContents = document.getElementById('receipt-details').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    });


        // Handle remove item
        $('.remove-item').click(function() {
            var index = $(this).data('index');
            $.ajax({
                url: 'remove_item.php', // Create a separate PHP script to handle item removal
                type: 'POST',
                data: { index: index },
                success: function(response) {
                    location.reload();
                },
                error: function() {
                    alert("Failed to remove item.");
                }
            });
        });

        // Update quantity
        $('.quantity').change(function() {
            var index = $(this).data('index');
            var newQuantity = $(this).val();
            $.ajax({
                url: 'update_quantity.php', // Create a separate PHP script to handle quantity updates
                type: 'POST',
                data: { index: index, quantity: newQuantity },
                success: function(response) {
                    location.reload();
                },
                error: function() {
                    alert("Failed to update quantity.");
                }
            });
        });
    });
    </script>
</body>
</html>
