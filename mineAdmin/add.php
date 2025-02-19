<?php
session_start(); // Start session to track logged-in admin
$admin_id = $_SESSION['admin_id']; // Get logged-in admin's ID
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $area_name = $_POST['area_name'];
    $pincode = $_POST['pincode'];
    $district_name = $_POST['district_name'];
    $state_name = $_POST['state_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $landmark = $_POST['landmark'];
    $block_name = $_POST['block_name'];
    $batch = $_POST['batch'];
    $admin_id = $_SESSION['admin_id']; // Ensure admin ID is stored in session
    $role = "user"; // New businesses are users by default
    //handle file upload
    if (isset($_FILES['avatar'])) {
        $avatar = $_FILES['avatar']['name'];
        $uploadDir = '../uploads/';

        // Make sure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        // Move the uploaded file to the "uploads" directory
        move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadDir . $avatar);

        // Insert data into the database
        $sql = "INSERT INTO users (name, area_name, pincode, district_name, state_name, email, contact_number,landmark, block_name, batch, role,avatar,admin_id)
            VALUES ('$name', '$area_name', '$pincode', '$district_name', '$state_name', '$email', '$contact_number','$landmark','$block_name', '$batch', 'user','$avatar','$admin_id')";

            
        if ($conn->query($sql) === TRUE) {
            header("Location: display.php");
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error with file upload.";
    }
}
?>