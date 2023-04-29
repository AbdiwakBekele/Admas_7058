<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ADMAS UNIVERSITY</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/ADMAS-5.jpg">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <style>
        /* Style the header with a grey background and some padding */
  .header {
    overflow: hidden;
    background-color: #0082e6;
    padding: 30px 15px;
    margin-top: 10px;
    position: absolute;
    margin-left: 5px;
    top: 26px;
    width: 95%;
    background-repeat: no-repeat;
  }
  
  /* Style the header links */
  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
  }
  
  /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }
  
  /* Change the background color on mouse-over */
  .header a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Style the active/current link*/
  .header a.active {
    background-color: dodgerblue;
    color: white;
  }
  
  /* Float the link section to the right */
  .header-right {
    float: right;
  }
  
  /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
    .header-right {
      float: none;
    }
  
   
      </style>
         
    
<script>
function validateform() {
let x= document.forms
["myform"]
["fname"].value;
if (x == ""){
alert("name must be filled out");
return false;
}
}
</script>


<style>
ul{
list-style-type:none;
margin: 0;
padding: o;
overflow: hidden;
background-color:#333;
}
li{
float: left;
}
li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
li a:hover {background-color: #111;
}
.active {
background-color: #04AA6D;
}


</style>
</head>
<body>

 <!-- Preloader Start -->
 <div id="preloader">
	<div class="admas-reg"></div>
</div>



<!-- ****** Top Header Area Start ****** -->
<div class="top_header_area">
	<div class="container">
		<div class="row">
			<div class="col-5 col-sm-6">
				<!--  Top Social bar start -->
				<div class="top_social_bar">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
				</div>
			</div>
			<!--  Login Register Area -->
		   
		</div>
	</div>
</div>
<!-- ****** Top Header Area End ****** -->
<br><br>
<br><br>
<br><br>

<!-- ****** Header Area Start ****** -->
<div class="header">
  
	<img class="normal_logo" src="https://www.admasuniversity.com/wp-content/uploads/2019/08/Logoo.png" alt="Admas University" title="Admas University">
	  <a href="#default" class="logo"></a>
	  <div class="header-right">
		<a  href="home.php">Home</a>
		<a href="news.php">News</a>
		<a href="contact.php">Contact us</a>
		<a href="about.php">About</a>
		<a href="login.php">Login</a>
	   
	  </div>
	</div>
	<div class="row justify-content-center">
<h1
style="background-color:dodgerblue; padding-left: 30px;">REGISTRATION FORM FOR POSTGRADUATE STUDENTS</h1>

<form name="myform"
onsubmit="return validateform()"
method="post">
First Name:<br> 
<input type="text"
name="fname"
pattern="[A-Za-z]+$"><br>

Middle Name:<br> 
<input type="text"
name="Mname"
pattern="[A-Za-z]+$"><br>

Last Name:<br> 
<input type="text"
name="lname"
pattern="[A-Za-z]+$"><br>

ID number:<br>
<input type="integer"
name"idno"
pattern="[0-9]+$"><br>

Reciept Number:<br> 
<input type="integer"
name="rno"><br>

Department Name:<br> 
<input type="text"
name="depname"
pattern="[A-Za-z]+$"><br>

Attendance year:<br> 
<input type="integer"
name="Att.year"><br>

<p>Gender</p>
<input type="radio"
id="Male"
name="Gender"
value="Male">
<label for="male">Male</label>
<input type="radio"
id="Female"
name="Gender"
value="Female"
<label for""Female">Female</label><br>
<input type="submit"
value="submit">
</div>


</form>
<div class="container">
	<div class="row">
		<div class="col-12">
			<!-- Copywrite Text -->
			<div class="copy_right_text text-center">
				<p>Copyright @2022 All rights reserved</p>
			</div>
		</div>
	</div>
</div>
</footer>

<!-- ****** Footer Menu Area End ****** -->

<!-- Jquery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap-4 js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins JS -->
<script src="js/others/plugins.js"></script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/google-map/map-active.js"></script>
<!-- Active JS -->
<script src="js/active.js"></script>

</body>
</html>



