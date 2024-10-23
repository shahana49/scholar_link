<?php
extract($_POST);
session_start(); 
//$uname=$_SESSION['uname'];
include("dbconnect.php");
 
if(isset($_POST['btn'])) 
{ 
$sname=$_REQUEST['name'];
$contact=$_REQUEST['contact'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$username=$_REQUEST['uname'];
$password=$_REQUEST['pass'];
 

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$qrys1="select id from  user_register ORDER BY id ASC";
$result = $conn->query($qrys1);
$sid=0;
 while($row = $result->fetch_assoc())
 {
 $sid=$row['id'];
 }
$id=$sid+1; 
$rdate=date("d-m-y");
  
 $qrys1="insert into  user_register values( $id,'$name','$address','$contact','$email','$username','$password','0','$rdate')";
  if ($conn->query($qrys1) === TRUE) {
  ?>					
	<script language="javascript">
	alert("Student Register Success");
	window.location.href="student_login.php";
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
<script language="javascript">
            function buyer_register()
            {
              // alert("");
               
				if (document.form1.name.value == "")
                {
				
                    alert("Enter the Name");
                    document.form1.name.focus();
                    return false;
                }
				 if (!/^[a-zA-Z]*$/g.test(document.form1.name.value)) {
					alert("Invalid characters. Enter  Name..");
					document.form1.name.focus();
					return false;
				}
				
	
				
				if (document.form1.contact.value == "")
                {
                    alert("Enter the Contact");
                    document.form1.contact.focus();
                    return false;
                } 
                if (document.form1.contact.value != "")
                {
                  var z = document.form1.contact.value;
             if(!/^[0-9]+$/.test(z)){
   
        alert("enter 0-9")
       document.form1.contact.focus();
        return false;
        }   
                }
                  
                      
               if (document.form1.contact.value != "")
                {
                   var a=document.form1.contact.value;
                   if(!(a.length ==10)) //i got a problem with this one i think
  {
  alert("Enter  10 character Maximum length");
    document.form1.contact.focus();

  return false;
  }
  
 
                }
							
				if (document.form1.email.value == "")
                {
                    alert("Enter the email");
                    document.form1.email.focus();
                    return false;
                }
                if (document.form1.email.value != "")
                {
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(document.form1.email.value.match(mailformat))  
{  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.email.focus();  
return false;  
}  
                } 
						
				 if (document.form1.address.value == "")
                {
                    alert("Enter the  Address");
                    document.form1.address.focus();
                    return false;
                }
				
				 if (document.form1.uname.value == "")
                {
                    alert("Enter the Username");
                    document.form1.uname.focus();
                    return false;
                } 
               
               
                if (document.form1.pass.value == "")
                {
                    alert("Enter the Password");
                    document.form1.pass.focus();
                    return false;
                }
                //finishMD();
                return true;
            }
        </script>


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
            <li class="breadcrumb-item active">User</li>
        </ol>
        <!---->
        <!--// banner-inner -->
    </section>
    <!--/ab -->
  
                <h3  align="center">Student Registration</h3>
                <form action="" method="post" name="form1" border="1">
                    <div class="form-group">
                        
                       
               
                    <p>&nbsp;</p>
                    <table width="391" height="326" border="0" align="center">
                      <!-- <tr>
                        <td>Name</td>
                        <td> <input type="username" class="form-control" id="name" name="name"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <td>      
                        <label for="name" class="form-label">Name</label>
                        <input type="username" id="name" class="form-control" name="name" placeholder="Name" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td>Contact</td>
                        <td><input type="username" class="form-control" id="contact" name="contact"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <td>      
                        <label for="contact" class="form-label">Contact</label>
                        <input type="username" id="contact" class="form-control" name="contact" placeholder="contact" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td>Mail Id</td>
                        <td> <input type="username" class="form-control" id="email" name="email"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <td>      
                        <label for="email" class="form-label">Mail Id</label>
                        <input type="username" id="email" class="form-control" name="email" placeholder="email" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td>Address</td>
                        <td> <input type="username" class="form-control" id="address" name="address"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <td>      
                        <label for="address" class="form-label">Address</label>
                        <input type="username" class="form-control" id="address" name="address"  placeholder="Address" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td>Username</td>
                        <td> <input type="username" class="form-control" id="uname" name="uname"  placeholder="" required=""></td>
                      </tr> -->

                      <tr>
                        <td>      
                        <label for="uname" class="form-label">Username</label>
                        <input type="username" id="uname" class="form-control" name="uname" placeholder="Username" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" id="pass" name="pass" placeholder="" required=""></td>
                      </tr> -->

                      <td>      
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" id="pass" class="form-control" name="pass" placeholder="Password" required=""></td>
                      </tr>

                      <!-- <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input name="btn" type="submit" id="btn" value="Register" onClick="return buyer_register()"> 
                        </label></td>
                      </tr> -->

                      <tr>
                        <td>
                        <button name="btn"  type="submit" id="btn" value="Register" class="btn btn-primary" onClick="return buyer_register()">Submit</button>
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
                    <p>© 2024. All rights reserved | Design by <a href="#"> Shahana P</a>

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
