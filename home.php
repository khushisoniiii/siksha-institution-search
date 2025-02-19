
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
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet"  href="index.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="icon" href="mylogoof.png">
   <title>Siksha</title>
</head>
<body>
   <header>
  <div class="banner">
   <video autoplay loop muted plays-inline>
      <source src="videos.mp4" type="video/mp4">
   </video>
   <div class="navbar">
      <h1 class="logo">siksha</h1>
      <ul>
         <li><a href="home.php">Home</a></li>
         <li><a href="aboutus.php">About Us</a></li>
         <li><a href="services.php">Services</a></li>
         <li><a href="co.php">Contact</a></li>
         <li><a href="register.php">Signup</a></li>
         <li><a href="admin_login.php"><i class="fa-solid fa-user"></i></a></li>
      </ul>
   </div>

   <div class="content">
      <h1>Discover more with us</h1>
      <div class="search">
         <i class="fas fa-search"></i>
         <form action="" method="GET">
            <input type="text" name="q" placeholder="What are you looking for?">
            <button type="submit">Search</button>
         </form>
         </div>
   </div>
  </div>
  </header>
  <div class="product" id="products"><main>
    <?php

    $sql = "SELECT name, area_name, pincode, district_name, state_name, email, contact_number, landmark, block_name, batch, avatar FROM users WHERE approve = 'approved'";
    
    if(isset($_GET["q"])){
        $q = $_GET["q"];

        $sql = "SELECT name, area_name, pincode, district_name, state_name, email, contact_number, landmark, block_name, batch, avatar FROM users WHERE approve = 'approved' AND (batch LIKE '%$q%' OR area_name LIKE '%$q%')";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='data-container'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='data-card'>";
            echo "<img class='avatar' src='uploads/" . htmlspecialchars($row["avatar"]) . "' alt='User Avatar'>";
            echo "<div class='card-content'>";
            echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
            echo "<p><strong>Area:</strong> " . htmlspecialchars($row["area_name"]) . "</p>";
            echo "<p><strong>Pincode:</strong> " . htmlspecialchars($row["pincode"]) . "</p>";
            echo "<p><strong>District:</strong> " . htmlspecialchars($row["district_name"]) . "</p>";
            echo "<p><strong>State:</strong> " . htmlspecialchars($row["state_name"]) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";
            echo "<p><strong>Contact:</strong> " . htmlspecialchars($row["contact_number"]) . "</p>";
            echo "<p><strong>Landmark:</strong> " . htmlspecialchars($row["landmark"]) . "</p>";
            echo "<p><strong>Block:</strong> " . htmlspecialchars($row["block_name"]) . "</p>";
            echo "<p><strong>Batch:</strong> " . htmlspecialchars($row["batch"]) . "</p>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>No approved users found.</p>";
    }
    ?>
</main></div>
<div class="about">
    <div class="abc">
        <h5>About Us</h5>
    </div>
    <div class="abcd">
        <h6>Siksha.com</h6>
        <p>Siksha our website is the place where a student meets the educationist, every learner finds the
    right trainer, a seeker gets the ideal coaching because here you get to choose amongst the best, to be the best.
    We are partnered with many institutes in Patna to provide you the finest education and training ever possible.</p>
    <a href="aboutus.php#readmore2">Read more</a>
    </div>
</div>
<div class="about1">
    <h4>All you need to know about Siksha.com</h4>
    <p>Siksha.com was established with the intention to reduce the gap between a student and educationist. 
        After long and extensive research our team realized that the main concern for every student or parent
         is to get.....</p>
         <a href="aboutus.php#readmore1">Read More</a>
</div>
<div class="table">
<div class="conn1">
             <i class="fa-solid fa-house-user"></i><a href="hometuition.php">Home Tuition</a>
             </div>
             <div class="conn2">
             <i class="fa-solid fa-school"></i><a href="coaching.php">Coaching Institutes</a>
             </div>
             <div class="conn3">
             <i class="fa-solid fa-house-chimney-user"></i><a href="competitive.php">Competitive Exam Institutes</a>
             </div>
             <div class="conn4">
             <i class="fa-solid fa-users"></i><a href="careercouncellors.php">Career Counsellors</a>
             </div>
             <div class="conn5">
             <i class="fa-solid fa-user-tie"></i><a href="ca.php">CCA/CS/LAW/IAS</a>
             </div>
             <div class="conn6">
             <i class="fa-solid fa-user-doctor"></i><a href="iit.php">IIT-JEE/IIT-JAM/NEET/GATE/IES</a>
             </div>
             <DIV class="CONN7">
             <i class="fa-solid fa-globe"></i><a href="online.php">Online Tutorials</a>
             </DIV>
             </div>
             <div class="q">
    <div class="animated-text">
        <span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span>  
        <span>t</span><span>o</span>  
        <span>S</span><span>i</span><span>k</span><span>s</span><span>h</span><span>a</span><span>.</span><span>c</span><span>o</span><span>m</span>
    </div>
</div>


  <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:soni.khushi0612@gmail.com</p>
                <p>Phone:+121 56556 565556</p>
                <p>Address:Bailey Road patna,Bihar</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                 <ul class="list">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#products">Career</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="contact.php">Feedback</a></li>
                 </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                 <li><a href=""><i class="fab fa-facebook"></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                 <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
                </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2023 Siksha . All rights reserved</p>
        </div>
    </footer>
    
</body>
</html>
