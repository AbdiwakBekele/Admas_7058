<?php

include "../db.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../admin_login.php');
}


// $q_teacher = "SELECT * FROM teacher";
// $q_teacher_result = mysqli_query($con,$q_teacher);
// $teacher_count = mysqli_num_rows($q_teacher_result);

// $q_student = "SELECT * FROM student";
// $q_student_result = mysqli_query($con,$q_student);
// $student_count = mysqli_num_rows($q_student_result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ADMAS UNIVERSITY</title>


    <link rel="icon" href="img/core-img/ADMAS-5.jpg">

    <link href="style.css" rel="stylesheet">

    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/Logo-Icons.png"/>
    <link rel="stylesheet" type="text/css" href="icon/svg-with-js/css/fa-svg-with-js.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .header {
            background-color: #0082e6;
            padding: 30px 15px;
            margin-top: 10px;
            position: absolute;
            margin-left: 5px;
            top: 26px;
            width: 100%;
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
        }

         
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="admas-reg"></div>
    </div>




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

    <br><br>
    <br><br>
    <br><br>


    <div class="header">

        <img class="normal_logo" src="https://www.admasuniversity.com/wp-content/uploads/2019/08/Logoo.png"
            alt="Admas University" title="Admas University">
        <a href="#default" class="logo"></a>
        <div class="header-right dropdown myac">
            <a href="home.php">Home</a>
            <a href="news.php">News</a>
            <a href="contact.php">Contact us</a>
            <a href="about.php">About</a>
            <a href="../admin_login.php">Logout</a>
                

        </div>
    </div>    
    </div>





            <!------- Student Registration Form ------->

<form class="was-validated bg-light border shadow p-3" action="a_add_student.php" method="POST" enctype="multipart/form-data" name="form">

<!-- Database Insertion PHP Code -->
<?php
    include '../db.php';    
    
    if(isset($_POST['Submit'])){
        
        $student_fullname = $_POST['student_fullname'];
        $student_email = $_POST['student_email'];
        $student_password = md5($_POST['student_password']);
        $confirm_student_password =  md5($_POST['confirm_student_password']);
        
        if($student_password == $confirm_student_password){
        
            $query = "INSERT INTO student (student_fullname,  student_email, student_password)
                                VALUES ('$student_fullname', '$student_email', '$student_password')";

            if(mysqli_query($con, $query)){
                $msg = "You have Successfully Add a Student!";
                echo $msg;
            }
            
        }else{
            $msg = "Password Don't match";
            echo $msg;
        }
    }
        
        $con->close();
    ?>  

    <!-- Full Name Input -->
    <div class="row mt-3">
        <div class="form-group col-md-12">
            <label for="fullname" class="form-label"><h6><b><i class="fas fa-user"></i> Full Name</b></h6></label>
            <input type="text" class="form-control" name="student_fullname" id="fullname" placeholder="Enter Your Full Name" required>

                    <div class="valid-feedback">good</div>
        </div>
    </div>
   

    <div class="row mt-3">
        <!-- Emain Input -->
        <div class="form-group mt-2 col-md-6 col-sm-12">
            <label for="email"><h6><b><i class="fas fa-envelope"></i> Email</b></h6></label>
            <input type="email" class="form-control" name="student_email" id="email" placeholder="Enter Email id" required>
                    <div class="valid-feedback">good</div>
        </div>
    </div>

    <div class="row mt-3">
        <!-- Password Input -->
        <div class="form-group mt-2 col-md-6 col-sm-12">
            <label for="email"><h6><b><i class="fas fa-envelope"></i> Password</b></h6></label>
            <input type="password" class="form-control" name="student_password" id="email" placeholder="Enter Password" required>
                    <div class="valid-feedback">good</div>  
        </div>

        <!-- Confirm Password Input -->
        <div class="form-group col-md-6 col-sm-12">
            <label for="mob_no" class="form-label"><h6><b><i class="fas fa-phone"></i> Confirm Your Password</b></h6></label>
            <input type="password" class="form-control" name="confirm_student_password" for="mob_no" placeholder="Confirm Your Password" maxlength="10" required>

                    <div class="valid-feedback">good</div> 
        </div>
    </div>

<div class="row">
    <div class="col-md mt-3 mb-3">
        <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Add Student</button>
    </div> 
</div>    

</form>










    
    
    
    
                <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>


    <script src="icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/main.js"></script>
</body>