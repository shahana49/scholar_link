<?php
session_start();
include("dbconnect.php"); // Ensure this file contains the correct database connection details

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Validate the input fields
    if (!empty($title) && !empty($message)) {
        // Insert the notification into the database
        $sql = "INSERT INTO notifications (title, message) VALUES ('$title', '$message')";
        
        // Check if the query is successful
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Notification sent successfully!');</script>";
        } else {
            // Output the SQL error for debugging
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Please fill in both fields');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Send Notification | Scholarship Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Scholarship Management System" />

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
</head>

<body>
    <!-- main-content -->
    <section class="main-content" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav>
                    <div class="logo-w3ls" id="logo-w3ls">
                        <h1><a href="admin_home.php"><span>Scholarship</span></a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3"><a href="admin_home.php">Home</a></li>        
                        <li class="mr-lg-4 mr-3 active"><a href="#">Send Notification</a></li>
                        <li class="mr-lg-4 mr-3"><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--// header -->

        <div class="page-inner">
            <h3 class="text-center mt-5"></h3>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card p-4">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Send Notification</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="text-right mt-3">
                <a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </footer>
</body>

</html>
