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


<style>
        /* Style the header with a grey background and some padding */
  .header {
    overflow: hidden;
    background-color: #0082e6;
    padding: 30px 15px;
    margin-top: 0px;
    position: fixed;
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
  .form{
    
  }
       
    }
      </style>
         
    

</head>
<body>

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
<h1 style="background-color:dodgerblue; margin-top: 170px; ">REGISTRATION FORM FOR TVET PROGRAM STUDENTS</h1>

 

<form  name="myform" 
onsubmit="return validateform()"
method="post" action="connect.php">
First Name:<br> 
<input type="text"
name="firstname"
pattern="[A-Za-z]+$"><br>

Middle Name:<br> 
<input type="text"
name="middlename"
pattern="[A-Za-z]+$"><br>

Last Name:<br> 
<input type="text"
name="lastname"
pattern="[A-Za-z]+$"><br>

<p>Gender</p>
<input type="radio"
id="Male"
name="gender"
value="Male">
<label for="male">Male</label>
<input type="radio"
id="Female"
name="gender"
value="Female"
<label for""Female">Female</label><br>

ID number:<br>
<input type="integer"
name"idno"
pattern="[0-9]+$"><br>

Reciept Number:<br> 
<input type="integer"
name="recieptno"><br>

Department Name:<br> 
<input type="text"
name="departmentname"
pattern="[A-Za-z]+$"><br>

Attendance year:<br> 
<input type="integer"
name="Attendanceyear"><br>


<input type="submit"
value="submit">
          
</form>

</body>
</html>



