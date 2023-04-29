<!DOCTYPE html>
<html>
<head>
<script>
function validateform() {
let x= document.forms
["myform"]
["firstname"].value;
if (x == ""){
alert("name must be filled out");
return false;
}
}
</script>

	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

   
    <title>ADMAS UNIVERSITY</title>

    
    <link rel="icon" href="img/core-img/ADMAS-5.jpg">

    
    <link href="style.css" rel="stylesheet">

    
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <style>
        
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
  
  
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }
  
  
  .header a:hover {
    background-color: #ddd;
    color: black;
  }
  
  
  .header a.active {
    background-color: dodgerblue;
    color: white;
  }
  
 
  .header-right {
    float: right;
  }
  
  
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
		<a  href="home.html">Home</a>
		<a href="news.html">News</a>
		<a href="contact.html">Contact us</a>
		<a href="about.html">About</a>
		<a href="login.html">Login</a>
	   
	  </div>
	</div>
	<div class="row justify-content-center">
<h1
style="background-color:dodgerblue; padding-left: 30px;">REGISTRATION FORM FOR UNDERGRADUATE PROGRAM STUDENTS</h1>


<form action="connect.php" method="post" onsubmit="return validateform()">
			
  <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstname" pattern="[A-Za-z]+$">
        </p>
  
        <p>
          <label for="middleName">Middle Name:</label>
          <input type="text" name="middlename" id="middlename" pattern="[A-Za-z]+$">
          </p>    
        

  <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastname" pattern="[A-Za-z]+$">
        </p>
  
        
  <p>
        <label for="Gender">Gender:</label>
        <input type="text" name="gender" id="Gender">
        </p>
  
        
  <p>
        <label for="idno">idno:</label>
        <input type="integer" name="idno" id="idno">
        </p>
  
      

  <p>
        <label for="recieptno">recieptno:</label>
        <input type="integer" name="recieptno" id="recieptno">
        </p>
  

        <p>
          <label for="departmentname">departmentname:</label>
          <input type="text" name="departmentname" id="departmentname" pattern="[A-Za-z]+$">
          </p>

          <p>
            <label for="attendanceyear">attendanceyear:</label>
            <input type="integer" name="attendanceyear" id="attendanceyear">
            </p>
        <input type="submit" value="Submit">
      </form>
    </center>
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