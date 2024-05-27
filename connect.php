<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = $_POST['userName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Database Connection
  $conn = new mysqli('localhost', 'root', '', 'sewing studio');
  if ($conn->connect_error) {
      echo "error";
  } else {
      $stmt = $conn->prepare("INSERT INTO register (userName, email, password) VALUES (?, ?, ?)");
      if ($stmt === false) {
          echo "error";
      } else {
          $stmt->bind_param("sss", $userName, $email, $password);
          $result = $stmt->execute();
          if ($result === false) {
              echo "<script>alert('Registration failed. Please try again later.');</script>";
              echo "<script>window.location.href = 'register.php';</script>"; 
          } else {
              echo "<script>alert('Registration successful!');</script>";
              echo "<script>window.location.href = 'login.php';</script>"; 
                
              }

          $stmt->close();
      }
      $conn->close();
  }
} else {
  echo "error";
}
?>