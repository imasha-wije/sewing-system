<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $inputUserName = trim($_POST['userName']);
    $inputPassword = $_POST['password'];

    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'sewing studio');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Prepare and execute statement
        $stmt = $conn->prepare("SELECT userName, password FROM admin WHERE userName = ?");
        $stmt->bind_param("s", $inputUserName);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user details
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            // Verify password 
            if (password_verify($inputPassword, $storedPassword)) {
                // Login successful, set session variables
                $_SESSION['userName'] = $inputUserName;

                // Redirect to index.php after a delay
                echo "<script>
                          setTimeout(function() {
                              window.location.href = 'admin.php';
                          }, 100); // 0.1 second delay
                      </script>";
            } else {
                // Incorrect password
                echo "<script>
                          alert('Login failed. Incorrect password.');
                          window.location.href = 'login.php';
                      </script>";
            }
        } else {
            // User does not exist
            echo "<script>
                      alert('Login failed. User does not exist.');
                      window.location.href = 'login.php';
                  </script>";
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