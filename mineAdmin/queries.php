<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="query.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">ADMIN <b>PANEL </b>
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
        <div class="font">
                <h1>
                    View Queries / Comments 
                </h1>
                <h2>Review and manage user queries here...</h2>
            </div>
            <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();

            // Check if the admin is logged in
            if (!isset($_SESSION['admin'])) {
                // Redirect to the login page if not logged in
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

            // Fetch all users from the database
            $sql = "SELECT id, name, email, phone , message FROM queries";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data for each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["message"]) . "</td>";
                    echo "<td>";
                    
                   
                    // Delete button
                    echo "<form method='POST' action='delete.php' style='display:inline;' onsubmit='return confirm(\"Are you sure you want to delete this user?\");'>
                            <input type='hidden' name='user_id' value='" . htmlspecialchars($row["id"]) . "'>
                            <button type='submit'>Delete</button>
                          </form>";

                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>
</section>
</div>
</body>
</html>

        