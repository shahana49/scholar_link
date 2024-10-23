
<?php
session_start();
include("dbconnect.php");
$uname = $_SESSION['uname'];

// Query to get the number of unread notifications
$notification_query = "SELECT COUNT(*) as unread_count FROM notifications WHERE is_read = 0"; // Assuming you have 'is_read' column for unread notifications
$result = mysqli_query($conn, $notification_query);
$unread_count = 0;
if ($row = mysqli_fetch_assoc($result)) {
    $unread_count = $row['unread_count'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Scholarship Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Scholarship Management System" />

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Notification bell and count styles */
        .notification-bell {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        /* Badge styling for unread notifications */
        .notification-bell .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 5px 10px;
            font-size: 12px;
        }

        /* Bell icon size */
        .notification-bell i {
            font-size: 24px;
            color: #000;
        }

        /* Menu styling */
        .menu {
            list-style-type: none;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .menu li {
            display: inline-block;
            margin-right: 20px;
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Main content -->
    <section class="main-content" id="home">
        <!-- Header -->
        <header>
            <div class="container-fluid px-lg-5">
                <!-- Navigation -->
                <nav>
                    <div class="logo-w3ls" id="logo-w3ls">
                        <h1><a href="#"><span>Scholarship</span></a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3 active"><a href="student_home.php">Home</a></li>
                        <li class="mr-lg-4 mr-3"><a href="student_view_schemes.php">View Schemes</a></li>
                        <li class="mr-lg-4 mr-3"><a href="student_apply.php">Apply Status</a></li>
                        <li class="mr-lg-4 mr-3"><a href="logout.php">Logout</a></li>

                        <!-- Bell Icon for Notifications -->
                        <li class="notification-bell">
                            <a href="notification_dashboard.php">
                                <i class="fa fa-bell"></i> <!-- Bell icon -->
                                <?php if ($unread_count > 0): ?>
                                    <span class="badge"><?php echo $unread_count; ?></span> <!-- Unread count badge -->
                                <?php endif; ?>
                            </a>
                        </li>

                        
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Banner -->
        <div class="page-inner"></div>

        <!-- Other content -->
        <br><br><br><br><br>
        <h3 align="center">User Home</h3>
        <br><br><br><br><br>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid p-lg-30 p-md-2">
            <div class="row py-sm-4 py-3"></div>
            <hr>
            <div class="d-flex justify-content-between pt-lg-3 footer-bottom-cpy">
                <div class="copy-right">
                    <p>© 2024. All rights reserved | Design by <a href="#">Shahana P</a></p>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
        </div>
    </footer>
</body>

</html>
