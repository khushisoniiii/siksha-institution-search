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
    <link rel="stylesheet" href="display.css">

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
                <button class="btn btn-primary"><a href="business.php" class="text-light">Add User</a></button>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
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
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
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

                        $sql = "SELECT id, name, area_name, pincode, district_name, state_name, email, contact_number, landmark, block_name, batch, avatar, created_at, approve 
        FROM users 
        WHERE role='user' AND admin_id='$admin_id' 
        ORDER BY created_at DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data for each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
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
                                echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                                echo "<td>";

                                // Conditional buttons for approval
                                if ($row["approve"] != "approved") {
                                    echo "<form method='POST' action='approve_useradmin.php' style='display:inline;'>
                                <input type='hidden' name='user_id' value='" . htmlspecialchars($row["id"]) . "'>
                                <button type='submit'>Approve</button>
                              </form>";
                                } else {
                                    echo "<form method='POST' action='unapprove_useradmin.php' style='display:inline;'>
                                <input type='hidden' name='user_id' value='" . htmlspecialchars($row["id"]) . "'>
                                <button type='submit'>Unapprove</button>
                              </form>";
                                }

                                // Delete button
                                echo "<form method='POST' action='delete_useradmin.php' style='display:inline;' onsubmit='return confirm(\"Are you sure you want to delete this user?\");'>
                            <input type='hidden' name='user_id' value='" . htmlspecialchars($row["id"]) . "'>
                            <button type='submit'>Delete</button>
                          </form>";
                                // Update button
                                echo "<form method='GET' action='update_user.php' style='display:inline;'>
        <input type='hidden' name='user_id' value='" . htmlspecialchars($row["id"]) . "'>
        <button type='submit'>Update</button>
      </form>";

                                echo "</td>";

                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='14'>No records found.</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
        </section>
</body>

</html>