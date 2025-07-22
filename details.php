<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No details found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="mylogoof.png">
    <title><?php echo htmlspecialchars($row["name"]); ?> - Details</title>
</head>
<body>
<div class="header">
    <h4>Siksha</h4>
    <div class="location">
    <p>
        <img src="location.gif" alt="Location Icon" class="location-icon">
        <?php echo htmlspecialchars($row["district_name"]); ?>
    </p>
</div>


        <ul class="nav_links">
        <li><a href="home.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li class="right"><a href="services.php">Services</a></li>
        <li><p class="adv"><i class="fa-solid fa-bullhorn"></i>    Advertise</p></li>  
        </ul>
</div>
    <div class="details-container">
        <h2><?php echo htmlspecialchars($row["name"]); ?></h2>
        <img src="uploads/<?php echo htmlspecialchars($row["avatar"]); ?>" alt="User Image">
        <br>
        <div class="icon">
        <i class="fa-solid fa-bookmark"></i>     
        
        
        
        <i class="fa-solid fa-share"></i></div>
        <p><strong>Area:</strong> <?php echo htmlspecialchars($row["area_name"]); ?></p>
        <p><strong>Pincode:</strong> <?php echo htmlspecialchars($row["pincode"]); ?></p>
        <p><strong>District:</strong> <?php echo htmlspecialchars($row["district_name"]); ?></p>
        <p><strong>State:</strong> <?php echo htmlspecialchars($row["state_name"]); ?></p>
        <p class="email"><strong>Email:</strong> <?php echo htmlspecialchars($row["email"]); ?></p>
        <p><strong>Contact:</strong> <?php echo htmlspecialchars($row["contact_number"]); ?></p>
        <p><strong>Landmark:</strong> <?php echo htmlspecialchars($row["landmark"]); ?></p>
        <p><strong>Block:</strong> <?php echo htmlspecialchars($row["block_name"]); ?></p>
        <p><strong>Batch:</strong> <?php echo htmlspecialchars($row["batch"]); ?></p>
        
        <br>
        <hr>
        <br>
        <p class="rate"><strong>Click to rate</strong></p>
<div class="star-rating">
    <i class="fa fa-star" data-value="1"></i>
    <i class="fa fa-star" data-value="2"></i>
    <i class="fa fa-star" data-value="3"></i>
    <i class="fa fa-star" data-value="4"></i>
    <i class="fa fa-star" data-value="5"></i>
</div>
<input type="hidden" id="rating" name="rating" value="0">
<p id="rating-text"></p>
<button onclick="submitRating()" class="submit">Submit Rating</button>
<br>

        <a href="home.php" class="back-btn">Back to Home</a>
    </div>
    <script src="deta.js"></script>
</body>
</html>
