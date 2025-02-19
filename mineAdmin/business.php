<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="bus.css">
	
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
    <div class="container">
        <h2>Add Business</h2>
        <form action="add.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="area_name">Address:</label>
            <input type="text" id="area_name" name="area_name" required>

            <label for="pincode">Pincode:</label>
            <input type="text" id="pincode" name="pincode" maxlength="6" required>

            <label for="district_name">District:</label>
            <input type="text" id="district_name" name="district_name" required>

            <label for="state_name">State:</label>
            <input type="text" id="state_name" name="state_name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" maxlength="15" required>

            <label for="landmark">Landmark:</label>
            <input type="text" id="landmark" name="landmark" required>

            <label for="block_name">Block:</label>
            <input type="text" id="block_name" name="block_name" required>

            <label for="batch">Business Category:</label>
            <select id="batch" name="batch" required>
                <option value="">--Select Category--</option>
                <option value="home tuitions">Home Tuitions</option>
                <option value="coaching institutes">Coaching Institutes</option>
                <option value="competitive exam institutes">Competitive Exam Institutes</option>
                <option value="career counsellors">Career Counsellors</option>
                <option value="online tutorials">Online Tutorials</option>
                <option value="IIT-JEE/IIT-JAM/NEET/GATE">IIT-JEE/IIT-JAM/NEET/GATE</option>
                <option value="CCA/CA/LAW/IAS">CCA/CA/LAW/IAS</option>
            </select>

            <label for="avatar">Choose a Picture:</label>
            <input type="file" id="avatar" name="avatar" required>

            <button type="submit" class="btn">Add</button>
        </form>
    </div>
		</section>
</body>
</html>

