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

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    
    // Get current user data
    $sql = "SELECT id, name, area_name, pincode, district_name, state_name, email, contact_number, landmark, block_name, batch, avatar, created_at 
            FROM users WHERE id = '$user_id' AND admin_id = '$admin_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No user found.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="update.css">

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
        <h2>Update User Profile</h2>
        <form method="POST" action="save_update_user.php" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="area_name" class="form-label">Area Name</label>
                <input type="text" class="form-control" id="area_name" name="area_name" value="<?php echo $row['area_name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $row['pincode']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="district_name" class="form-label">District</label>
                <input type="text" class="form-control" id="district_name" name="district_name" value="<?php echo $row['district_name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="state_name" class="form-label">State</label>
                <input type="text" class="form-control" id="state_name" name="state_name" value="<?php echo $row['state_name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="contact_number" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $row['contact_number']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="landmark" class="form-label">Landmark</label>
                <input type="text" class="form-control" id="landmark" name="landmark" value="<?php echo $row['landmark']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="block_name" class="form-label">Block</label>
                <input type="text" class="form-control" id="block_name" name="block_name" value="<?php echo $row['block_name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="batch" class="form-label">Business Category</label>
                <select class="form-control" id="batch" name="batch" required>
                    <option value="">--Select Category--</option>
                    <option value="home tuitions" <?php echo ($row['batch'] == 'home tuitions') ? 'selected' : ''; ?>>Home Tuitions</option>
                    <option value="coaching institutes" <?php echo ($row['batch'] == 'coaching institutes') ? 'selected' : ''; ?>>Coaching Institutes</option>
                    <option value="competitive exam institutes" <?php echo ($row['batch'] == 'competitive exam institutes') ? 'selected' : ''; ?>>Competitive Exam Institutes</option>
                    <option value="career counsellors" <?php echo ($row['batch'] == 'career counsellors') ? 'selected' : ''; ?>>Career Counsellors</option>
                    <option value="online tutorials" <?php echo ($row['batch'] == 'online tutorials') ? 'selected' : ''; ?>>Online Tutorials</option>
                    <option value="IIT-JEE/IIT-JAM/NEET/GATE" <?php echo ($row['batch'] == 'IIT-JEE/IIT-JAM/NEET/GATE') ? 'selected' : ''; ?>>IIT-JEE/IIT-JAM/NEET/GATE</option>
                    <option value="CCA/CA/LAW/IAS" <?php echo ($row['batch'] == 'CCA/CA/LAW/IAS') ? 'selected' : ''; ?>>CCA/CA/LAW/IAS</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Profile Picture</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
                <img src="../uploads/<?php echo $row['avatar']; ?>" alt="User Photo" width="100">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</section>

    </div>
</body>
</html>
