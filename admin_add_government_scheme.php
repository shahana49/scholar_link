<?php
extract($_POST);
session_start(); 
//$uname=$_SESSION['uname'];
include("dbconnect.php");
 
if(isset($_POST['btn'])) 
{ 
$department=$_REQUEST['department'];
$scheme_name=$_REQUEST['scheme_name'];
$scheme_period=$_REQUEST['scheme_period'];
$conditions=$_REQUEST['conditions'];
$scheme_for=$_REQUEST['scheme_for'];

 

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$qrys1="select id from  add_government_scheme ORDER BY id ASC";
$result = $conn->query($qrys1);
$sid=0;
 while($row = $result->fetch_assoc())
 {
 $sid=$row['id'];
 }
$id=$sid+1; 
$rdate=date("d-m-y");
  
 $qrys1="insert into  add_government_scheme values( $id,'$department','$scheme_name','$scheme_period','$conditions','$scheme_for','$rdate')";
  if ($conn->query($qrys1) === TRUE) {
  ?>					
	<script language="javascript">
	alert("Add  Scheme Success");
	window.location.href="admin_add_government_scheme.php";
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
						<li class="mr-lg-4 mr-3 active">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-sort-desc" aria-hidden="true"></span> </label>
                            <a href="#">Schemes <span class="fa fa-sort-desc" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="admin_add_government_scheme.php">Add Scheme</a></li>
                                <li><a href="admin_view_schemes.php">View Schemes</a></li>
                            </ul>
                        </li>
                      
                        <li class="mr-lg-4 mr-3 "><a href="admin_add_rural_head.php">Add Officer</a></li>
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
  
                <h3  align="center">Add  Schemes</h3>
                <form action="" method="post">
                
                  
                  <p>&nbsp;</p>
                  <table width="391" height="326" border="0" align="center">
                    <tr>
                      <!-- <td>Category</td> -->
                      <td>
                      <label for="department" class="form-label">Category</label>
                        <select name="department" id="department" class="form-control" required="" >
					    <option value="">-Select-</option>

                        <!-- <label for="department" class="form-label">Category</label>
                        <select name="department" id="department" class="form-select" required="">
                        <option>-Select-</option> -->


						<?php
						
						$qry="select * from   add_rural_head";
						$result = mysqli_query($conn, $qry);
						while($row=mysqli_fetch_assoc($result))
						{
						?>
					  <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
						  <?php
						  }
						  ?>
                      </select>
                    
                      </td>
                    </tr>

                    <!-- <tr>
                      <td>Scheme Name</td>
                      <td><input type="text" class="form-control" id="scheme_name" name="scheme_name"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="scheme_name" class="form-label">Scheme Name</label>
                        <input type="text" id="scheme_name" class="form-control" name="scheme_name" placeholder="Scheme Name" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Time Limit </td>
                      <td><input type="text" class="form-control" id="scheme_period" name="scheme_period"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="scheme_period" class="form-label">Time Limit</label>
                        <input type="text" id="scheme_period" class="form-control" name="scheme_period" placeholder="Time Limit" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Eligibility</td>
                      <td><input type="text" class="form-control" id="conditions" name="conditions"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="conditions" class="form-label">Eligibility</label>
                        <input type="text" id="conditions" class="form-control" name="conditions" placeholder="Eligibility" required=""></td>
                    </tr>

                    <!-- <tr>
                      <td>Required Doc </td>
                      <td><input type="text" class="form-control" id="scheme_for" name="scheme_for"  placeholder="" required=""></td>
                    </tr> -->

                    <tr>
                        <td>      <label for="scheme_for" class="form-label">Required Doc</label>
                        <input type="text" id="scheme_for" class="form-control" name="scheme_for" placeholder="Required Doc" required=""></td>
                    </tr>
                    
                    <!-- <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input name="btn" type="submit" id="btn" value="ADD" onClick="return buyer_register()">
                      </label></td>
                    </tr> -->

                    <tr>
                        
                        <td>
                            <br>
                        <button name="btn"  type="submit" id="btn" value="ADD" class="btn btn-primary" onClick="return buyer_register()">Submit</button>
                        </td>
                    </tr>

                  </table><br><br><br><br><br>
                </form>
   

    
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
