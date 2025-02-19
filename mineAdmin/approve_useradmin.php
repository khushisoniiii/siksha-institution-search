<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.html");
    exit;
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user_id is set
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Update the user's status to 'approved'
    $sql = "UPDATE users SET approve = 'approved' WHERE id = $user_id";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $user_id);

    if ($conn->query($sql)) {
        header("Location: display.php"); // Redirect back to the list
        exit;
    } else {
        echo "Error approving user: " . $conn->error;
    }

    //$stmt->close();
}

$conn->close();
?>