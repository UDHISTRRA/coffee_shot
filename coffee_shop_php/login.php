<?php
// Include database configuration
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Handle login
        if (isset($_POST['login'])) {
            $username = $_POST['loginUsername'];
            $password = $_POST['loginPassword'];
            
            // Check credentials in login_details table
            $query = "SELECT * FROM login_details WHERE Username = :Username";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['Username' => $username]);
            $user = $stmt->fetch();

            if ($user && $password === $user['Password']) {
                echo "<script>alert('Login successful');</script>";
            } else {
                echo "<script>alert('Login failed');</script>";
            }
        }

        // Handle signup
        if (isset($_POST['signup'])) {
            // Retrieve the signup form data
            $username = $_POST['signupUsername'];
            $email = $_POST['signupEmail'];
            $password = $_POST['signupPassword'];

            // Insert into signup_details table (Id is no longer present)
            $query = "INSERT INTO signup_details (Username, Email, Password) VALUES (:Username, :Email, :Password)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                'Username' => $username, 
                'Email' => $email, 
                'Password' => $password
            ]);

            // Also insert into login_details for login purposes
            $query = "INSERT INTO login_details (Username, Password) VALUES (:Username, :Password)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                'Username' => $username, 
                'Password' => $password
            ]);

            echo "<script>alert('Sign up successful');</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Login Form</title>
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #e7ceaa;
        background-image: url('resources/brown-back.png');
        color: #3E2723;
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      #nav-bar {
        height: 60px;
        background-color: #191210;
        color: white;
        padding: 10px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      ul {
        list-style: none;
        margin-top: 10px;
        padding: 0;
      }

      li {
        display: inline;
        padding: 0px 20px;
        color: white;
        cursor: pointer;
        transition: color 0.3s ease;
      }

      li a {
        text-decoration: none;
        color: inherit;
      }

      li:hover {
        color: #D7CCC8;
      }

      #icon {
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
      }

      #search {
        height: 30px;
        width: 30px;
        cursor: pointer;
      }

      #bag {
        height: 30px;
        width: 30px;
        margin-left: 60px;
      }

      #login1 {
        border-radius: 30px;
        background-color: #191210;
        color: white;
        padding: 10px 20px;
        border: none;
        transition: background-color 0.3s ease;
        display: inline-block;
        text-align: center;
      }

      #login1:hover {
        background-color: #fafaf9;
        color: black;
      }

      #card-container {
        perspective: 1000px;
      }

      .card-flip {
        width: 350px;
        height: 450px;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.6s;
      }

      .card-flip.flipped {
        transform: rotateY(180deg);
      }

      .card-front, .card-back {
        width: 100%;
        height: 100%;
        position: absolute;
        backface-visibility: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        padding: 30px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .card-back {
        transform: rotateY(180deg);
      }

      .btn {
        background-color: #191210;
        color: white;
        border-radius: 20px;
        font-weight: bold;
        cursor: pointer;
      }

      h2 {
        font-size: 24px;
        color: #3E2723;
        margin-bottom: 20px;
        text-align: center;
      }

      .form-label {
        color: #6D4C41;
      }

      .form-container {
        flex: 1;
      }

      .form-actions {
        margin-top: 10px;
      }

      .d-grid {
        margin-top: 10px;
      }

      .card-content {
        display: flex;
        flex-direction: column;
        height: 100%;
      }

      .card-content .form-container {
        flex-grow: 1;
      }
    </style>
</head>
<body>
    <div id="card-container">
      <div class="card-flip">
        <!-- Login Card Front -->
        <div class="card-front card-content">
          <h2>Login</h2>
          <form action="login.php" method="POST" class="form-container">
            <div class="mb-3">
              <label for="loginUsername" class="form-label">Username</label>
              <input type="text" class="form-control" id="loginUsername" name="loginUsername" required />
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPassword" name="loginPassword" required />
            </div>
            <div class="d-grid">
              <button type="submit" class="btn" name="login">Login</button>
            </div>
            <div class="d-grid">
              <button type="button" class="btn" onclick="flipCard()">Sign Up</button>
            </div>
          </form>
        </div>

        <!-- Sign Up Card Back -->
        <div class="card-back card-content">
          <h2>Sign Up</h2>
          <form action="login.php" method="POST" class="form-container">
            <div class="mb-3">
              <label for="signupUsername" class="form-label">Username</label>
              <input type="text" class="form-control" id="signupUsername" name="signupUsername" required />
            </div>
            <div class="mb-3">
              <label for="signupEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="signupEmail" name="signupEmail" required />
            </div>
            <div class="mb-3">
              <label for="signupPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="signupPassword" name="signupPassword" required />
            </div>
            <div class="d-grid">
              <button type="submit" class="btn" name="signup">Sign Up</button>
            </div>
            <div class="d-grid">
              <button type="button" class="btn" onclick="flipCard()">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      function flipCard() {
        document.querySelector('.card-flip').classList.toggle('flipped');
      }
    </script>
</body>
</html>
