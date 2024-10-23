<?php
extract($_POST);
session_start(); 
include("dbconnect.php");

$uname=$_SESSION['uname'];
$qry="select * from  user_register where uname='$uname'";
$result = mysqli_query($conn, $qry);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$contact=$row['contact'];
$email=$row['email'];

$bid=$_REQUEST['bid'];

$rd=rand(9999,1000);
$appli_ID="APP_NO-".$rd;

$qry1="select * from  add_government_scheme where id='$bid'";
$result1 = mysqli_query($conn, $qry1);
$row1=mysqli_fetch_assoc($result1);
$department=$row1['category'];
$scheme_name=$row1['scheme_name'];
$scheme_period=$row1['scheme_period'];


if(isset($_POST['btn'])) 
{ 

 $voter_id = $_FILES['voter_id']['name'];
 $driving_license = $_FILES['driving_license']['name'];
 $pan_card = $_FILES['pan_card']['name'];
 $aadhar_card = $_FILES['aadhar_card']['name'];
 $aadhar_card2 = $_FILES['aadhar_card2']['name'];
 $photo = $_FILES['photo']['name'];

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$qrys1="select id from  user_apply ORDER BY id ASC";
$result = $conn->query($qrys1);
$sid=0;
 while($row = $result->fetch_assoc())
 {
 $sid=$row['id'];
 }
$id=$sid+1; 
$rdate=date("d-m-y");
  
 $qrys1="insert into  user_apply values($id,'$appli_ID','$name','$contact','$email','$department','$scheme_name','$scheme_period','$voter_id','$driving_license','$aadhar_card','$aadhar_card2','$photo','0','0','$rdate')";
  if ($conn->query($qrys1) === TRUE) {
  move_uploaded_file($_FILES['voter_id']['tmp_name'],"upload/".$voter_id);
  move_uploaded_file($_FILES['driving_license']['tmp_name'],"upload/".$driving_license);
  move_uploaded_file($_FILES['aadhar_card2']['tmp_name'],"upload/".$aadhar_card2);
  move_uploaded_file($_FILES['aadhar_card']['tmp_name'],"upload/".$aadhar_card);
  move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$photo);
  ?>					
	<script language="javascript">
	alert("Apply  Schemes Success");
	window.location.href="student_view_schemes.php";
	</script>
	<?php
 }
 else
{
    
 ?>					
<script language="javascript">
alert("Registration Failed");
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
                        <li class="mr-lg-4 mr-3 "><a href="student_home.php">Home</a></li>
                        <li class="mr-lg-4 mr-3 active"><a href="student_view_schemes.php">View Schemes</a></li>
                        <li class="mr-lg-4 mr-3 "><a href="student_apply.php">Apply Status</a></li>
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
            <li class="breadcrumb-item active">User</li>
        </ol>
        <!---->
        <!--// banner-inner -->
    </section>
    <!--/ab -->
  
                <h3  align="center">User Home</h3>
                <form action="" method="post" enctype="multipart/form-data">
                      <p>&nbsp;</p>
                    <table width="511" height="432" border="0" align="center">

                      <tr>
                        <th>Application ID </th>
                        <td><?php echo $appli_ID;?></td>
                      </tr>

                      <!-- <tr>
                        <td>      <label for="" class="form-label">Application ID</label></td>
                        <td><input type="text" placeholder="<?php echo $appli_ID;?>" required=""></td>
                      </tr> -->

                      <tr>
                        <th>Name</th>
                        <td><?php echo $name;?></td>
                      </tr>

                      <!-- <tr>
                        <td>      <label for="" class="form-label">Name</label></td>
                        <td><input type="text" placeholder="<?php echo $name;?>" required=""></td>
                      </tr> -->

                      <tr>
                        <th>Category</th>
                        <td><?php echo $department;?></td>
                      </tr>

                      <!-- <tr>
                        <td>      <label for="" class="form-label">Category</label></td>
                        <td><input type="text" placeholder="<?php echo $department;?>" required=""></td>
                      </tr> -->

                      <tr>
                        <th>Scheme Name</th>
                        <td> <?php echo $scheme_name;?></td>
                      </tr>

                      <!-- <tr>
                        <td>      <label for="" class="form-label">Scheme Name</label></td>
                        <td><input type="text" placeholder="<?php echo $scheme_name;?>" required=""></td>
                      </tr> -->

                      <!-- <tr>
                        <td><strong>Academic certificate</strong></td>
                        <td> <input type="file" class="form-control" id="voter_id" name="voter_id"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <th>      <label for="voter_id" class="form-label">Academic certificate</label></th>
                        <td><input type="file" id="voter_id" class="form-control" name="voter_id" placeholder="" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td><strong>Institute</strong></td>
                        <td> <input type="file" class="form-control" id="driving_license" name="driving_license"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <th>      <label for="driving_license" class="form-label">Institute</label></th>
                        <td><input type="file" id="driving_license" class="form-control" name="driving_license" placeholder="" required=""></td>
                    </tr>

					            <!-- <tr>
                        <td><strong>Student Aadhar Card</strong></td>
                        <td><input type="file" class="form-control" id="aadhar_card" name="aadhar_card" placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <th>      <label for="aadhar_card" class="form-label">Student Aadhar Card</label></th>
                        <td><input type="file" id="aadhar_card" class="form-control" name="aadhar_card" placeholder="" required=""></td>
                    </tr>

					            <!-- <tr>
					              <td><strong>Parent Aadhar Card</strong></td>
					              <td><input type="file" class="form-control" id="aadhar_card2" name="aadhar_card2" placeholder="" required=""></td>
				              </tr> -->

                      <tr>
                        <th>      <label for="aadhar_card2" class="form-label">Parent Aadhar Card</label></th>
                        <td><input type="file" id="aadhar_card2" class="form-control" name="aadhar_card2" placeholder="" required=""></td>
                    </tr>

					            <!-- <tr>
                        <td><strong>Photo</strong></td>
                        <td><input type="file" class="form-control" id="photo" name="photo" placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <th>      <label for="photo" class="form-label">Photo</label></th>
                        <td><input type="file" id="photo" class="form-control" name="photo" placeholder="" required=""></td>
                    </tr>

                      <!-- <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input name="btn" type="submit" id="btn" value="Apply" onClick="return buyer_register()"> 
                        </label></td>
                      </tr> -->

                      <tr>
                      <td>&nbsp;</td>
                        <td><br>
                        <button name="btn"  type="submit" id="btn" value="Apply" class="btn btn-primary" onClick="return buyer_register()">Submit</button>
                        <br></td>
                      </tr>

                    </table>
                </form>
                <br><br>
    <!-- //ab -->
 
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
