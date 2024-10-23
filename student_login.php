<?php
extract($_POST);
session_start(); 
include("dbconnect.php");
if(isset($_POST['btn'])) 
{
	$uname=$_REQUEST['uname'];
	$password=$_REQUEST['pass'];

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
	 $qry="select * from  user_register where uname='$uname' and  pass='$password'";
	$result = mysqli_query($conn, $qry);
	 if (mysqli_num_rows($result)) 
	{
	$_SESSION['uname']=$uname;
	?>					
	<script language="javascript">
	alert("Student login Success");
	window.location.href="student_home.php";
	</script>
	<?php
	}  
	else
	{
	?>					
	<script language="javascript">
	alert("Invalid username and password");
	</script>
	<?php
	}
}
$conn->close();
}
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
                        <h1> <a href="#"><span>Scholarship</span></a>
                        </h1>

                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3 "><a href="index.php">Home</a></li>
                        <li class="mr-lg-4 mr-3 "><a href="admin_login.php">Co-ordinator</a></li>
                        <li class="mr-lg-4 mr-3 active"><a href="student_login.php">Student</a></li>
                        <li><a href="officer_login.php">Officer</a></li>
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
  
                <h3  align="center">Student Login Now</h3>
                <form action="" method="post">
                    <div class="form-group">
                        
                       
               
                    <p>&nbsp;</p>
                    <table width="423" height="195" border="0" align="center">
                      
                    <!-- <tr>
                        <td>Username</td>
                        <td> <input type="text" class="form-control" id="exampleInputEmail1" name="uname"  placeholder="" required=""></td>
                    </tr> -->
                    <tr>
                        <td>      
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" id="exampleInputEmail1" class="form-control" name="uname" placeholder="Username" required=""></td>
                      </tr>

                    <!-- <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="" required=""></td>
                    </tr> -->
                    <tr>
                        <td>      
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" id="exampleInputPassword1" class="form-control" name="pass" placeholder="Password" required=""></td>
                      </tr><br>

                    <!-- <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input name="btn" type="submit" id="btn" value="Login">
                          <a href="student_register.php" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a> 
                        </label></td>
                    </tr> -->
                    <tr>
                        <td>
                        <button name="btn"  type="submit" id="btn" value="Login" class="btn btn-primary" align="center">Submit</button>
                        <a href="student_register.php" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                        </td>
                      </tr>


                    </table>
                    <p class="text-left pb-4">&nbsp;</p>
                </form>
   
    <!-- //ab -->
    <!-- services  -->
    
    <!-- services -->

    <!--/counter-->
  
    <!--//counter-->


    <!--/ab -->
   
    <!-- newsletter -->
   
    <!-- //newsletter -->

    <!--/sponsors-->
    
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
