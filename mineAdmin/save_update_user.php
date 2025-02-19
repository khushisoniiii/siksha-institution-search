<?php
session_start();

// Assuming the admin is logged in and you want to set this manually for testing
$admin_id = 'admin@example.com'; // Set your admin email directly

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
    $user_id = $_POST['user_id'];
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
  

    // Handle profile image upload
    if (isset($_FILES['avatar']) && $_FILES['avatar']['name'] != "") {
        $avatar = $_FILES['avatar']['name'];
        $uploadDir = '../uploads/';
        $avatarPath = $uploadDir . basename($avatar);
        move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarPath);
    } else {
        $avatar = $_POST['current_avatar'];  // Keep the existing avatar if no new file is uploaded
    }

    // Update the database
    $sql = "UPDATE users 
            SET name='$name', area_name='$area_name', pincode='$pincode', avatar='$avatar' 
            WHERE id='$user_id' AND admin_id='$admin_id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: display.php");  // Redirect to the user list page
    } else {
        echo "Error updating user: " . $conn->error;
    }

    $conn->close();
}
?>
