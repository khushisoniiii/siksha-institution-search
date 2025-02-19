<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$successMessage = ""; // To hold the message for JavaScript
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
    //handle file upload
    if (isset($_FILES['avatar'])) {
        $avatar = $_FILES['avatar']['name'];
        $uploadDir = './uploads/';

        // Make sure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        // Move the uploaded file to the "uploads" directory
        move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadDir . $avatar);

        // Insert data into the database
        $sql = "INSERT INTO users (name, area_name, pincode, district_name, state_name, email, contact_number,landmark, block_name, batch, role,avatar)
            VALUES ('$name', '$area_name', '$pincode', '$district_name', '$state_name', '$email', '$contact_number','$landmark','$block_name', '$batch', 'user','$avatar')";

if ($conn->query($sql) === TRUE) {
    $successMessage = "Thanks for submitting!";
} else {
    $successMessage = "Error: " . $conn->error;
}
} else {
$successMessage = "Error with file upload.";
}
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="r.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="mylogoof.png">
    <title>Siksha: Registration</title>
  </head>
</head>
<body>
    <header>
      <h3 class="header">Siksha</h3>
      <nav>
        <ul class="nav_links">
          <li><a href="home.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li><a href="services.php">Services</a></li>
         
        </ul>
      </nav> 
      
      <button class="cta" onclick="openPopup()"><i class="fa-solid fa-phone"></i>Contact</button>
          <div class="popup" id="popup">
             <img src="contact.jpg">
             <h2>We're here for you!</h2>
             <h6>Please reach out to us if you have any questions regarding our site , support or general questions</h6>
             <h5><i class="fa-solid fa-envelope"></i>soni.khushi0612@gmail.com</h5>
             <h5><i class="fa-solid fa-mobile"></i>+1604825-92001</h5>
             
             <button type="button"  onclick="closePopup()">Close</button>
          </div>
    </header>
   
    <p>WELCOME TO SIKSHA.COM</p>
    <h4>Register here &#9759;</h4>
    <main>
        <form action="register.php" method="POST" enctype="multipart/form-data">
            <label for="name" class="a">Name:</label>
            <input type="text" id="name" name="name"  required>

            <label for="area_name" class="b">Address:</label>
            <input type="text" id="area_name" name="area_name" required>

            <label for="pincode" class="c">Pincode:</label>
            <input type="text" id="pincode" name="pincode" maxlength="6" required>

            <label for="district_name" class="d">District:</label>
            <input type="text" id="district_name" name="district_name" required>

            <label for="state_name" class="e">State:</label>
            <input type="text" id="state_name" name="state_name" required>

            <label for="email" class="f">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="contact_number" class="g">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" maxlength="15" required>

            <label for="landmark" class="h">Landmark:</label>
            <input type="text" id="landmark" name="landmark" required>

            <label for="block_name" class="k">Block:</label>
            <input type="text" id="block_name" name="block_name" required>

            <label for="batch" class="y">Business Reg. category</label>
            <select id="batch" name="batch" required>
                <option value="">--Select Batch--</option>
                <option value="home tuitions">home tuitions</option>
                <option value="coaching institutes">coaching institutes</option>
                <option value="competitive exam institutes">competitive exam institutes</option>
                <option value="career counsellors">career counsellors</option>
                <option value="online tutorials">online tutorials</option>
                <option value="IIT-JEE/IIT-JAM/NEET/GATE">IIT-JEE/IIT-JAM/NEET/GATE</option>
                <option value="CCA/CA/LAW/IAS">CCA/CA/LAW/IA</option>
            </select>

            <label for="avatar" class="z">Choose a picture:</label>
            <input type="file" id="avatar" name="avatar" required>

            <button type="submit" class="btn">Register</button>
        </form>
    </main>
    <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");
            
        }
        function closePopup(){
            popup.classList.remove("open-popup");
            
        }
       
        // Display a popup if there's a success message
        window.onload = function () {
            const successMessage = "<?php echo $successMessage; ?>";
            if (successMessage) {
                alert(successMessage);
            }
        };
  
        </script>

</body>
</html>




    
   
   
  