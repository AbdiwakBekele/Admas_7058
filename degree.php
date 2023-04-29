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
         
    

</head>
<body>

<div class="header">
  
	<img class="normal_logo" src="https://www.admasuniversity.com/wp-content/uploads/2019/08/Logoo.png" alt="Admas University" title="Admas University">
	  <a href="#default" class="logo"></a>
	  <div class="header-right">
		<a  href="home.html">Home</a>
		<a href="news.html">News</a>
		<a href="contact.html">Contact us</a>
		<a href="about.html">About</a>
		<a href="login.php">Login</a>
	   
	  </div>
	</div>
<h1 style="background-color:dodgerblue; margin-top: 170px; ">REGISTRATION FORM FOR UNDERGRADUATE PROGRAM STUDENTS</h1>

 

<form  name="myform" 
onsubmit="return validateform()"
method="post" action="degree.php">
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
<input type="number" name = "idno" ><br>
<!-- pattern="[0-9]+$" -->

Reciept Number:<br> 
<input type="number" name="recieptno"><br>

Department Name:<br> 
<input type="text"
name="departmentname"
pattern="[A-Za-z]+$"><br>

Attendance year:<br> 
<input type="number"
name="attendanceyear"><br>


<input type="submit"
value="submit">
          
</form>


<?php

		$conn = mysqli_connect("localhost", "root", "", "staff");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$firstname = $_REQUEST['firstname'];
    $middlename = $_REQUEST['middlename'];
		$lastname = $_REQUEST['lastname'];
		$gender = $_REQUEST['gender'];
		$idno = $_REQUEST['idno'];
		$recieptno = $_REQUEST['recieptno'];
    $departmentname = $_REQUEST['departmentname'];
    $attendanceyear = $_REQUEST['attendanceyear'];

	
		$sql = "INSERT INTO degree VALUES ('$firstname','$middlename',
			'$lastname','$gender','$idno','$recieptno','$departmentname','$attendanceyear')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

		
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>


</body>
</html>



