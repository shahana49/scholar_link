<?php
// Start the session
session_start();

// Include the database connection file
include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Scholarship Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Scholarship Management System" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <!-- //Fonts -->

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
                        <h1>
                            <a href="#"><span>Scholarship</span></a>
                        </h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3"><a href="admin_home.php">Home</a></li>
                        <li class="mr-lg-4 mr-3 active"><a href="admin_view_reguser.php">View Registered Students</a></li>
                        <li class="mr-lg-4 mr-3"><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <div class="page-inner"></div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_home.php">Home</a></li>
            <li class="breadcrumb-item active">Registered Students</li>
        </ol>
    </section>
    <!-- /main-content -->

    <h3 align="center">View Registered Students</h3>
    <form action="" method="post">
        <p>&nbsp;</p>
        <table class="table table-bordered" width="1220" border="3" align="center">
            <tr class="table-primary">
                <th><strong>Username</strong></th>
                <th><strong>Address</strong></th>
                <th><strong>Contact</strong></th>
                <th><strong>Email ID</strong></th>
                <th><strong>Registration Date</strong></th>
            </tr>
            <?php
            // Fetching registered students from the 'user_register' table
            $qry = "SELECT * FROM user_register";
            $result = mysqli_query($conn, $qry);

            // Loop through and display each student's details
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['rdate']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <p>&nbsp;</p>
    </form>

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid p-lg-30 p-md-2">
            <hr>
            <div class="d-flex justify-content-between pt-lg-3 footer-bottom-cpy">
                <div class="copy-right">
                    <p>© 2024. All rights reserved | Design by <a href="#">Shahana P</a></p>
                </div>
                <div class="text-right mt-3">
                    <a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
