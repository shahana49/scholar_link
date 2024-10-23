<?php
session_start();
include("dbconnect.php");

$uname = $_SESSION['uname'];

// Mark all unread notifications as read when this page is accessed
$update_query = "UPDATE notifications SET is_read = 1 WHERE is_read = 0";
mysqli_query($conn, $update_query);

// Query to get all notifications
$notification_query = "SELECT title, message, created_at FROM notifications ORDER BY created_at DESC";
$result = mysqli_query($conn, $notification_query);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Notification Dashboard</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- mian-content -->
    <section class="main-content" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav>
                    <div class="logo-w3ls" id="logo-w3ls">
                        <h1><a href="#"><span>Scholarship</span></a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3"><a href="student_home.php">Home</a></li>
                        <li class="mr-lg-4 mr-3"><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- page-inner -->
        <div class="page-inner"></div>
    </section>
    <!--// header -->

    <!-- Notification Section -->
    <section class="notifications mt-5">
        <div class="container">
            <h3 class="text-center">Your Notifications</h3>
            <div class="notification-list mt-4">
                <ul class="list-group">
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <li class="list-group-item">
                                <strong><?php echo $row['title']; ?></strong>
                                <p><?php echo $row['message']; ?></p>
                                <small class="text-muted">
                                    <?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?>
                                </small>
                            </li>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <li class="list-group-item">No notifications available</li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="text-center mt-4">
                <a href="student_home.php" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container-fluid p-lg-30 p-md-2">
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
