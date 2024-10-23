<?php
extract($_POST);
session_start(); 
//$uname=$_SESSION['uname'];
include("dbconnect.php");
 
if(isset($_POST['btn'])) 
{
$r_name=$_REQUEST['r_name']; 
$department=$_REQUEST['department'];
$contact=$_REQUEST['contact'];
$college=$_REQUEST['college'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$username=$_REQUEST['uname'];
$password=$_REQUEST['pass'];

 

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$qrys1="select id from  add_rural_head ORDER BY id ASC";
$result = $conn->query($qrys1);
$sid=0;
 while($row = $result->fetch_assoc())
 {
 $sid=$row['id'];
 }
$id=$sid+1; 
$rdate=date("d-m-y");
  
 $qrys1="insert into  add_rural_head values( $id,'$r_name','$department','$college','$contact','$email','$address','$username','$password','$rdate')";
  if ($conn->query($qrys1) === TRUE) {
  ?>					
	<script language="javascript">
	alert("Add Officer Success");
	window.location.href="admin_add_rural_head.php";
	</script>
	<?php
 }
 else
{
    
 ?>					
<script language="javascript">
alert("Failed");
</script>
<?php
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
                        <li class="mr-lg-4 mr-3 "><a href="admin_home.php">Home</a></li>
						<li class="mr-lg-4 mr-3">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-sort-desc" aria-hidden="true"></span> </label>
                            <a href="#">Schemes <span class="fa fa-sort-desc" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="admin_add_government_scheme.php">Add Scheme</a></li>
                                <li><a href="admin_view_schemes.php">View Schemes</a></li>
                            </ul>
                        </li>
                      
                        <li class="mr-lg-4 mr-3 active"><a href="admin_add_rural_head.php">Add Officer </a></li>
                        <li class="mr-lg-4 mr-3 "><a href="admin_view_user.php">View Student</a></li>
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
  
                <h3  align="center">Add Officer</h3>
                <form action="" method="post">
				  <p>&nbsp;</p>
                  <table width="391" height="326" border="0" align="center">

                    <!-- <tr>
                      <td>Officer Name</td>
                      <td><input type="text" class="form-control" id="r_name" name="r_name"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="r_name" class="form-label">Officer Name</label></td>
                        <td><input type="text" id="r_name" class="form-control" name="r_name" placeholder="Officer Name" required=""></td>
                    </tr>

					<!-- <tr>
                      <td>Category</td>
                      <td><input type="text" class="form-control" id="department" name="department"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="department" class="form-label">Category</label></td>
                        <td><input type="text" id="department" class="form-control" name="department" placeholder="Category" required=""></td>
                    </tr>

					<!-- <tr>
                      <td>College</td>
					  <td><input type="text" class="form-control" id="college" name="college"  placeholder="" required=""></td>
				    </tr> -->

                    <tr>
                        <td>      <label for="college" class="form-label">College</label></td>
                        <td><input type="text" id="college" class="form-control" name="college" placeholder="College" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Contact</td>
                      <td><input type="text" class="form-control" id="contact" name="contact"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="contact" class="form-label">Contact</label></td>
                        <td><input type="text" id="contact" class="form-control" name="contact" placeholder="Contact" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Email</td>
                      <td><input type="text" class="form-control" id="email" name="email"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="email" class="form-label">Email</label></td>
                        <td><input type="text" id="email" class="form-control" name="email" placeholder="Email" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Address</td>
                      <td><input type="text" class="form-control" id="address" name="address"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="address" class="form-label">Address</label></td>
                        <td><input type="text" id="address" class="form-control" name="address" placeholder="Address" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Username</td>
                      <td><input type="text" class="form-control" id="uname" name="uname"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="uname" class="form-label">Username</label></td>
                        <td><input type="text" id="uname" class="form-control" name="uname" placeholder="Username" required=""></td>
                    </tr>

					<!-- <tr>
                      <td>Password</td>
                      <td><input type="password" class="form-control" id="pass" name="pass"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="pass" class="form-label">Password</label></td>
                        <td><input type="password" id="pass" class="form-control" name="pass" placeholder="Password" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input name="btn" type="submit" id="btn" value="Add">
                      </label></td>
                    </tr> -->

                    <tr>
                    <td>&nbsp;</td>
                        <td><br>
                        <button name="btn"  type="submit" id="btn" value="Add" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
                    
                  </table>
                </form><br><br>
   

    
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
