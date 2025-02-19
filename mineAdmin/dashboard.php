<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="dash.css">
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
				<h4 color="#63d0fb">KHUSHI SONI</h4>
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
			<!-- Card 1 -->
			<div class="card">

				<h3>Queries <i class="fa-solid fa-comment"></i></h3>
				<p>Monitor and handle all incoming queries and comments with ease.</p>
				<button onclick="location.href='queries.php'">Access</button>
			</div>

			<!-- Card 2 -->
			<div class="card">

				<h3>Add Business <i class="fa-solid fa-users"></i></h3>
				<p>Easily add and manage your business details.</p>
				<button onclick="location.href='business.php'">Add Business</button>
			</div>

			<!-- Card 3 -->
			<div class="card">

				<h3>Registered Users <i class="fa-solid fa-users"></i></h3>
				<p>View and manage all registered users in one place.</p>
				<button onclick="location.href='addbusiness.php'">View Users</button>
			</div>
			<!-- card 4 -->
			<div class="card">

				<h3>Reports <i class="fa fa-tasks" aria-hidden="true"></i></h3>
				<p>Generate, analyze, and manage reports efficiently.</p>
				<button onclick="location.href='reports.php'">Access</button>
			</div>
		</section>
	</div>

</body>

</html>