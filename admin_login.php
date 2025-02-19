<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check admin credentials
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $row['id']; // Save admin session
            header("Location: mineAdmin/dashboard.php"); // Redirect to admin dashboard
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No admin account found with this email.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet"href="adminlogin.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="icon" href="mylogoof.png">
    <title>Siksha: Admin Login </title>

</head>
<body>
    <div class="box">
     <form action="admin_login.php" method="POST">
      <h1>ADMIN LOGIN</h1>
        <div class="inputbox">
        <label for="email">Username:</label>
        <input type="text" id="email" name="email" required><br>
        </div>
        <br>
        <div class="inputbox">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        </div>
        <button type="submit"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Login</button>
    </form>
    </div>
</body>
</html>