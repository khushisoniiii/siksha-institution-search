
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


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="report.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">ADMIN <b>PANEL</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/khushi.jpg">
				<h4>KHUSHI SONI</h4>
			</div>
			<ul>
				<li>
					<a href="dashboard.php">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="reports.php">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>Reports</span>
					</a>
				</li>
				<li>
					<a href="queries.php">
                    <i class="fa-solid fa-comment"></i>
						<span>Queries</span>
					</a>
				</li>
				<li>
					<a href="business.php">
					<i class="fa-solid fa-users"></i>
						<span>Add Business</span>
					</a>
				</li>
				<li>
					<a href="display.php">
					<i class="fa-solid fa-users"></i>
						<span>View Added Users</span>
					</a>
				</li>
				<li>
					<a href="addbusiness.php">
					<i class="fa-solid fa-user-tie"></i>
						<span>Registered Users</span>
					</a>
				</li>
                <li>
					<a href="../home.php">
					<i class="fa-solid fa-right-from-bracket"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
     <div class="table-container">
    <table>
        <thead>
            <tr>
               
                <th>Name</th>
                <th>Area Name</th>
                <th>Pincode</th>
                <th>District</th>
                <th>State</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Landmark</th>
                <th>Block</th>
                <th>Batch</th>
                <th>Image</th>
               
            </tr>
        </thead>
		<script>
        function printPage(){
            window.print();
            alert("Print");
        }
    </script>
    <button onclick="printPage()">Print Page</button>
	<div class="search">
    <i class="fas fa-search"></i>
    <form action="" method="GET">
        <input type="text" name="q" placeholder="Search">
    </form>
</div>

    </div>
        <tbody>
			
        <main>
        <?php
		
        
$sql = "SELECT name, area_name, pincode, district_name, state_name, email, contact_number, landmark, block_name, batch, avatar FROM users WHERE approve = 'approved'";
$result = $conn->query($sql);
if(isset($_GET["q"])){
	$q = $_GET["q"];

	$sql = "SELECT id, name, area_name, pincode, district_name, state_name, email, contact_number, landmark, block_name, batch, avatar FROM users WHERE approve = 'approved' AND (name LIKE '%$q%' OR area_name LIKE '%$q%')";
}
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='data-container'>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["area_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["pincode"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["district_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["state_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["contact_number"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["landmark"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["block_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["batch"]) . "</td>";
            echo "<td><img src='../uploads/" . htmlspecialchars($row["avatar"]) . "' alt='User Photo' width='100'></td>";
           
            echo "<td>";
        }
        echo "</div>";
    } else {
        echo "<p>No approved users found.</p>";
    }
    ?>
	
</main>
			</section>
           
</body>
</html>