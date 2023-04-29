<?php

include "../db.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../student_login.php');
}


$total_credit_hr = 0;
$total_grade_pt = 0;
$cumulative_grade = 0;


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


    <!--   === Student table === -->
    <section class="mt-2 bg-light">
                    <div class="">
                        <div class="row">
                            <div class="col-md">
                                
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="h5">
                                            <th colspan="9" class="bg-dark text-white"><center>Course Table</center></th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr class="h5 bg-primary text-white">
                                            <th class="text-center" scope="col">Course ID</th>
                                            <th class="text-center" scope="col">Course Name</th>
                                            <th class="text-center" scope="col">Credit Hours</th>
                                            <th class="text-center" scope="col">Grade</th>
                                            <th class="text-center" scope="col">Grade Pt</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                        <?php 
                                        
                                        // Commented Section
                                        if(isset($_REQUEST['id'])){
                                            $student_id = intval($_REQUEST['id']);
                                            
                                            $q = "SELECT * FROM result WHERE student_id = '$student_id'";
                                            $q_result = mysqli_query($con,$q);
                                            
                                            while($row = mysqli_fetch_assoc($q_result)){

                                                $course_id = $row['course_id'];
                                                $result_id = $row['result_id'];
                                                if($row['result'] == ""){
                                                    $result = "-";                                                    
                                                } else{
                                                
                                                    $result = $row['result'];
                                                }

                                                $q_course = "SELECT * FROM courses WHERE courses_id = '$course_id'";
                                                $q_course_result = mysqli_query($con,$q_course);
                                                $course_name = "";

                                                while($r =mysqli_fetch_assoc($q_course_result)){

                                                    $course_name = $r['course_name'];
                                                    $course_credit = $r['credit_hours'];

                                                    
                                                    $total_credit_hr = $total_credit_hr + floatval($course_credit);


                                                    

                                                }

                                                    //floatval($var)
                                                    $grade = "";
                                                    $grade_pt = "";

                                                    if(floatval($result) > 90){
                                                        $grade = "A+";
                                                        $grade_pt = 4 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 85){
                                                        $grade = "A";
                                                        $grade_pt = 4 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 80){
                                                        $grade = "A-";
                                                        $grade_pt = 3.75 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 75){
                                                        $grade = "B+";
                                                        $grade_pt = 3.5 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 70){
                                                        $grade = "B";
                                                        $grade_pt = 3 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;


                                                    }else if(floatval($result) >= 65){
                                                        $grade = "B-";
                                                        $grade_pt = 2.75 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 60){
                                                        $grade = "C+";
                                                        $grade_pt = 2.5 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 50){
                                                        $grade = "C";
                                                        $grade_pt = 2 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 45){
                                                        $grade = "C-";
                                                        $grade_pt = 1.75 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) >= 40){
                                                        $grade = "D";
                                                        $grade_pt = 1 * floatval($course_credit);
                                                        $total_grade_pt = $total_grade_pt + $grade_pt;

                                                    }else if(floatval($result) > 0 ){
                                                        $grade = "F";
                                                        $grade_pt = "Failed";
                                                    }else if(floatval($result) == 0 ){
                                                        $grade = "-";
                                                        $grade_pt = "-";

                                                    }

                                                    echo "<td> $course_id </td>";
                                                    echo "<td> $course_name </td>";
                                                    echo "<td> $course_credit </td>";
                                                    echo "<td> $grade </td>";
                                                    echo "<td> $grade_pt </td>";

                                                ?>
                                                                                                  
                                                    </tr> 
                                                    
                                                    <?php  
                                            } 

                                            if($total_credit_hr > 0){
                                                $cumulative_grade = $total_grade_pt / $total_credit_hr;
                                            }
                                            
                                        }
                                                    ?>
                                        
                                    </tbody>
                                </table>

                                <?php 

                                echo "<h5> Total Credit Hours: $total_credit_hr </h5>";
                                echo "<hr>";
                                echo "<h5> Total Grade Point: $total_grade_pt </h5>";
                                echo "<h5> Cumulative Grade: $cumulative_grade </h5>";

                                
                                
                                ?>



                            </div>   
                        </div>
                    </div>
                </section>


   
    
    
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