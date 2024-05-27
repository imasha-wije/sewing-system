<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/favicon.jpeg">

  <!-- SweetAlert CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

  <!-- SweetAlert JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <style>
    .input-box.change {
      margin-bottom: 2px; 
    }

    .password-validation {
      font-size: 12px;
      color: #ffff4c;
      margin-top: 0;
    }

    .disabled {
      pointer-events: none;
      opacity: 0.5;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form id="registerForm" action="connect.php" method="post">
      <h1>Register</h1>
      <div class="input-box">
        <input type="text" placeholder="User name" id="userName" name="userName" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Email" id="email" name="email" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" id="password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box change">
        <div class="password-validation" id="passwordValidation"></div> <!-- Password validation message -->
      </div>
    
      <button type="submit" class="btn" id="submitButton">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>

  <script>
    document.getElementById("password").addEventListener("input", function() {
      var password = this.value;
      var passwordValidationMessage = document.getElementById("passwordValidation");
      var submitButton = document.getElementById("submitButton");

      if (password.length < 8) {
        passwordValidationMessage.textContent = "Password must be at least 8 characters long.";
        submitButton.classList.add("disabled");
      } else {
        passwordValidationMessage.textContent = "";
        submitButton.classList.remove("disabled");
      }
    });
  </script>
</body>
</html>