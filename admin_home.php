<?php
extract($_POST);
session_start(); 
include("dbconnect.php");

?>
<!DOCTYPE html>
<html lang="zxx">

<head><title>Scholarship Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Toon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <!-- //Fonts -->

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
                        <h1>
                            <a href="#"><span>Scholarship</span></a>
                        </h1>

                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3 active"><a href="admin_home.php">Home</a></li>
						<li class="mr-lg-4 mr-3">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown<span class="fa fa-sort-desc" aria-hidden="true"></span> </label>
                            <a href="#">Schemes<span class="fa fa-sort-desc" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="admin_add_government_scheme.php">Add Scheme</a></li>
                                <li><a href="admin_view_schemes.php">View Schemes</a></li>
                            </ul>
                        </li>
                      
                        <li class="mr-lg-4 mr-3 "><a href="admin_add_rural_head.php">Add Officer </a></li>                       
                        <li class="mr-lg-4 mr-3 "><a href="admin_view_user.php">View Student</a></li>
                        <li class="mr-lg-4 mr-3 "><a href="admin_view_reguser.php">View Registered Student</a></li>
                        <li class="mr-lg-4 mr-3 "><a href="admin_send_notification.php">Send Notification</a></li>
						<li class="mr-lg-4 mr-3 "><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
                <!-- //nav -->
            </div>
        </header>
        <!-- banner-text-wthree -->
        <div class="page-inner">

        </div>
        <!---->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Co-ordinator</li>
        </ol>
        <!---->
        <!--// banner-inner -->
    </section>
    <!--/ab -->
  <br> <br> <br> <br> <br>
                <h3  align="center">Co-ordinator Home</h3>
                <form action="#" method="post">
                
                    <p class="text-left pb-4">&nbsp;</p>
                </form>
   
                <br> <br> <br> <br> <br>
    
    <!-- //sponsors -->
    <!--/footer-->
    <footer class="footer">
        <div class="container-fluid p-lg-30 p-md-2">

            <div class="row py-sm-4 py-3">
                

               
               
               
            </div>
            <hr>
            <div class="d-flex justify-content-between pt-lg-3  footer-bottom-cpy">
                <div class="copy-right">
                    <p>© 2024. All rights reserved | Design by <a href="#"> Shahana P </a>

                    </p>
                </div>
                <div class="social-content pb-md-0 pb-4">
                    <ul class="social-icons text-center d-flex">
                      

                    </ul>


                </div>
            </div>
            <div class="text-right mt-3">
                <a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </footer>
    <!-- popup-login-->
    

</body>

</html>
