<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $inputUserName = trim($_POST['userName']);
    $inputPassword = $_POST['password'];

    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'sewing studio');
    if ($conn->connect_error) {
        echo "error";
    } else {
        
        $stmt = $conn->prepare("SELECT userName, password FROM register WHERE userName = ?");
        $stmt->bind_param("s", $inputUserName);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user details
            $row = $result->fetch_assoc();
            $userName = $row['userName'];
            $storedPassword = $row['password'];

           // Verify password 
           if ($inputPassword === $storedPassword) {
            // Login successful, set session variables
            $_SESSION['userName'] = $inputUserName;
            
            // Show success message
            echo "<script>alert('Login success...!!');</script>";
            
            // Redirect to index.php after a delay
            echo "<script>
                      setTimeout(function() {
                          window.location.href = 'index.php';
                      }, 100); // 0.2 second delay
                  </script>";
             } else {
    
            echo "<script>alert('Login failed. Incorrect password.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
            }
        } else {
            // User does not exist
            echo "<script>alert('Login failed. User does not exist.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }

       
        $stmt->close();
        $conn->close();
    }
} else {
    // If not a POST request, redirect to login.php
    header("Location: login.php");
    exit;
}
?>
