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
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO queries (name, email, phone , message)
            VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    $successMessage = "Thanks for submitting!";
} else {
    $successMessage = "Error: " . $conn->error;
}
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">We are here for you!</h3>
          <p class="text">
            Please reach out to us if you have any questions regarding our site,
            support or general questions
          </p>

          <div class="info">
            <div class="information">
              <img src="location.png" class="icon" alt="" />
              <p>Patna City Bihar , Patna-800008</p>
            </div>
            <div class="information">
              <img src="email.png" class="icon" alt="" />
              <p>soni.khushi0612@gmail.com</p>
            </div>
            <div class="information">
              <img src="phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
              <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
              
            </div>
            
            
          </div>
          <a href="home.php" class="btns">Close</a>  
        </div>


        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="contact.php" method="POST">
            <h3 class="title">Have questions or feedback? Share them here..</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" id="name" />
              <label for="name">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" id="email"/>
              <label for="email">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" id="phone" />
              <label for="phone">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" id="message"></textarea>
              <label for="message">Message</label>
              <span>Message</span>
            </div>
            <button type="submit" class="btn">Send</button>
           
          </form>
        </div>
      </div>
    </div>

    <script src="co.js"></script>
 
</body>
</html>