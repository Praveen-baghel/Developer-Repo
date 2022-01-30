<?php
if(isset($_POST['Name']))
{
$server="localhost";
$username="root";
$password="";
$database="contact";

$connection=mysqli_connect($server,$username,$password);

if(!$connection)
{
     die("Connection Failed".mysqli_error());
}

else
    // echo "Connection Sucessfull to the Databse Contact";
    $Name=$_POST['Name'];  
    $Email=$_POST['Email'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];
$sql="INSERT INTO `contact`.`contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$Name','$Email','$Subject','$Message');";
if($connection->query($sql)==true)
{
  // echo "Success";
}
else{
  // echo "Failed";
}
$connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Vishal Developer's</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
</head>
<body>
    
  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top " style="background-color: black;">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><span></span></a></h1> 
      
      <a href="index.html" ><img src="logo.png" width="250px" alt=" "></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop functions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li5
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header>
  <br> 
  
<section>
  <h1 style="padding: 50px; color: rgb(24, 23, 23); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Contact Us :</h1>
<div class="col-lg-8 mt-5 mt-lg-0" style="padding:px; margin-left: 200px;" >

    <form action="contact.php" method="post" id="contact-off" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="Name" class="form-control" id="Name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="Email" id="Email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3" >
        <textarea  class="form-control" name="Message" id="Message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <!-- <div class="loading">Loading</div> -->
        <div class="error-message"></div>
        <div class="sent-message" style="color:green;"></div>
        <br>
      </div>
   <div style="margin-left:740px;">  <input type="submit"  id="button" style="color:black; border-radius: 5px; padding:7px 25px 8px 25px; white-space: nowrap; display: inline-block; background-color:rgb(218, 204, 16); font-weight:bold;"></div>
    </form>
    
</div>
</section>
</body>
</html>
<!-- 
STYLE COPYIRGHT BY VISHAL DEVELOPER'S
STYLE COPYIRGHT BY VISHAL DEVELOPER'S
STYLE COPYIRGHT BY VISHAL DEVELOPER'S
STYLE COPYIRGHT BY VISHAL DEVELOPER'S
STYLE COPYIRGHT BY VISHAL DEVELOPER'S
STYLE COPYIRGHT BY VISHAL DEVELOPER'S
STYLE COPYIRGHT BY VISHAL DEVELOPER'S


DATE STRUCUTED BY VD DEVELOPERS TEAM
DATE STRUCUTED BY VD DEVELOPERS TEAM
DATE STRUCUTED BY VD DEVELOPERS TEAM
 -->


