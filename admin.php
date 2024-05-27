<?php
// Start session to access session variables
// session_start();

// // Check if admin is logged in
// // if (!isset($_SESSION['userName'])) {
// //     // If not logged in, redirect to login page
// //     header("Location: login.php");
// //     exit;
// }

// // Database connection
// $conn = new mysqli('localhost', 'root', '', 'sewing studio');
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Fetch orders data
// $sql = "SELECT orderID, userName, phoneNo, postalCode, email, streetAddress, city, deliverCharge FROM orders";
// $result = $conn->query($sql);

// // Close database connection
// $conn->close();
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1><center>Admin Dashboard</center></h1>
  <h2><center>Orders</center></h2>
  <center>
  <table border=1>
    <thead>
      <tr>
        <th>  Order ID  </th>
        <th> User Name </th>
        <th>Phone No</th>
        <th>Postal Code</th>
        <th>Email</th>
        <th>Street Address</th>
        <th>City</th>
        <th>Delivery Charge</th>
      </tr>
    </thead>
    </tbody>
  </table>
</center>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html> 
    <!-- <tbody> -->
      <!-- 
    //   // Display orders data in table rows
    //   if ($result->num_rows > 0) {
    //       while ($row = $result->fetch_assoc()) {
    //           echo "<tr>";
    //           echo "<td>" . $row['orderID'] . "</td>";
    //           echo "<td>" . $row['userName'] . "</td>";
    //           echo "<td>" . $row['phoneNo'] . "</td>";
    //           echo "<td>" . $row['postalCode'] . "</td>";
    //           echo "<td>" . $row['email'] . "</td>";
    //           echo "<td>" . $row['streetAddress'] . "</td>";
    //           echo "<td>" . $row['city'] . "</td>";
    //           echo "<td>" . $row['deliverCharge'] . "</td>";
    //           echo "</tr>";
    //       }
    //   } else {
    //       echo "<tr><td colspan='8'>No orders found</td></tr>";
    //   }
    //   ?>-->
    