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

        <img class="normal_logo" src="image/Logoo.png"
            alt="Admas University" title="Admas University">
        <a href="#default" class="logo"></a>
        <div class="header-right dropdown myac">
            <a class="active" href="home.php">Home</a>
            <a href="news.php">News</a>
            <a href="contact.php">Contact us</a>
            <a href="about.php">About</a>
            <!-- <a href="login.php">Login</a> -->
            
            <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i ></i>&nbsp;<label>Users</label></a>

            <ul class="dropdown-menu" aria-labelledby="dpMLink">
                <li class="dropdown-item"><a href="admin_login.php"><i class="fas fa-user-graduate"></i> Admin </a></li>
                <li class="dropdown-item"><a href="student_login.php"><i class="fas fa-chalkboard-teacher"></i> Student</a></li>
                <li class="dropdown-item"><a href="finance_login.php"><i class="fas fa-chalkboard-teacher"></i> Finance</a></li>
            </ul>
                

        </div>
    </div>



    <center>
        <div style="padding-left: 50px; padding-top: 3px; max-width: 2000px;">
            <div class="image_slider" style="margin-top: 4px; padding-top: 0px; ">
                <div style="max-width:1000px">
                    <img class="mySlides" src="img/aa.jpg" style="width: 1000px, ;height: 350px">
                    <img class="mySlides" src="img/bb.jpg" style="width:1000px, ;height: 350px">
                    <img class="mySlides" src="img/cc.jpg" style="width:1000px, ;height: 350px">
                </div>

            </div>
        </div>
        </div>
    </center>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 2 seconds
        }
    </script>
    
    <h2 style="margin-left: 100px;">WELCOME TO ADMAS UNIVERSITY MEKANISA CAMPUS</h2>
    
        <p style="margin-left: 20px; margin-right: 15px;">The Admas University is accredited by Regional Educational Bureaus, Higher
            Education
            Relevance and
            Quality Agency (HERQA),
            and the Federal Ministry of Education of Ethiopia.
            It offers both on-campus education and distance learning in various programs.
            These courses are in turn offered at a number of levels: certificate, diploma and degree.</p>

        <p style="margin-left: 20px; margin-right: 15px;">Admas university is one of well konwn higher educational institute in ethiopia having 5 campuses in addis
            abeba
            and mekanissa campus is one of those well known campuses of the university.
            At the campus several acadamic programs are offerd for diferent educational level
            studentsi.e.(Undergratuate,postgratuate &TVET programs)on both regular and extention programs. Now in the
            campus
            more than 1500 students registered per year for Degree and TVET programs & about 800 students registered per
            year for Postgraduate program.
            in those remarkable twenty years the campus is growing regarding to it's way of learning system and also it
            becomes the most well known private universities in ethiopia.</p>
    
    <h1><i>Meet the Campus's Staff Members</i></h1>
    <section class="welcome-post-sliders owl-carousel">

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="img/tewe.jpg" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                </div>

                <h5>Ato Tewele Aregay<br>Dean of the campus</h5>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="img/selam.jpg" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">

                </div>

                <h5>Selamawit hadush<br>head of CS dep.</h5>

            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="img/shewi.jpg" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">

                </div>

                <h5>SHEWIT G/MEDHIN<br>head of Accounting and Finance.</h5>

            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="img/daw.jpg" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">

                </div>

                <h5>Dawit mekonen<br>Vice Dean.</h5>

            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="img/seb.jpg" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                </div>

                <h5>Seble Eshetie<br>Excutive secretary.</h5>

            </div>
        </div>

    </section>

    <h1><i>Department of studies which are given in the campus</i></h1>
    <section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="cs2.jpg" alt="">
                        <div class="catagory-title">
                            <h5>COMPUTER SCIENCE</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img src="img/bm.png" alt="">
                        <div style="margin-right: 90px;" class="catagory-title">
                            <h5>BUSSINESS<br>MANAGMENT</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="cspro12.png" alt="">
                        <div class="catagory-title">
                            <h5>PROJECT<br>MANAGMENT</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="img/a.jpg" alt="">
                        <div class="catagory-title">
                            <h5>ACCOUNTING</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="img/ba.png" alt="">
                        <div class="catagory-title">
                            <h5>BUSSINESS<br>ADMINISTRATION</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="cs1.jpg" alt="">
                        <div class="catagory-title">
                            <h5>INFORMATION<br>TECHNOLOGY</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="img/aaa.png" alt="">
                        <div class="catagory-title">
                            <h5>ACCOUNTING AND<br>FINANACE</h5>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="img/mmm.jpg" alt="">
                        <div class="catagory-title">
                            <h5>MARKETING<br>MANAGMENT</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="detailed_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="img/tewe.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <h3><i>Message from the dean</i><br>Tewlde.s</h3>
                                            </div>

                                        </div>

                                    </div>
                                    <p>our university is one of the...........</p>
                                    <a href="#" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>




                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="img/mm.png" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">

                                        </div>

                                    </div>

                                    <h4 class="post-headline"><U>MISSION</U></h4>

                                    <p> Admas university has the following missions</p>

                                    <ol>
                                        <li>Provide quality higher education at all levels for affordable prices through
                                            regular,
                                            continuing, and distance mode. </li>
                                        <li>Conduct quality and outcome-based training to produce middle level human
                                            resources. </li>
                                        <li>Render various community service to fulfil social responsiblities.</li>
                                    </ol>

                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".4s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="img/vv.png" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">

                                        </div>

                                    </div>

                                    <h4 class="post-headline"><u>VISION</u></h4>

                                    <p>Admas university envisions being the most reputable private higher education
                                        institution interms
                                        of outstanding quality education, reserch in east africa by 2023. </p>

                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".6s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="img/va.png" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                        </div>


                                    </div>

                                    <h4 class="post-headline"><u>VALUE</u></h4>

                                    <p>Admas university is devoted to promote the following organizational values at
                                        institutional level.</p>
                                    <p>Quality</p>
                                    <p>Transparency</p>
                                    <p>Equity</p>
                                    <p>Involvement</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">

                        <div class="single-widget-area popular-post-widget">
                            <div class="widget-title text-center">
                                <h6>start your registration process here</h6>
                            </div>

                            <div class="single-populer-post d-flex">
                                <img src="img/deg.jpg" alt="">
                                <div class="post-content">
                                    <a href="degree.php">
                                        <h6>Undergratuate Program</h6>
                                    </a>
                                </div>
                            </div>

                            <div class="single-populer-post d-flex">
                                <img src="img/dip.png" alt="">
                                <div class="post-content">
                                    <a href="TVET program registration page.php">
                                        <h6>TVET Program</h6>
                                    </a>
                                </div>
                            </div>

                            <div class="single-populer-post d-flex">
                                <img src="img/mas.jpg" alt="">
                                <div class="post-content">
                                    <a href="Postgratuate program registration page.php">
                                        <h6>Postgratuate program</h6>
                                    </a>
                                </div>
                            </div>


                            <div class="single-widget-area newsletter-widget">
                                <div class="widget-title text-center">
                                    <h6>Any Comment?</h6>
                                </div>
                                <p>if there are Any comments about our learning system and any other related issues we
                                    are delightfull to accept,thankyou!</p>
                                <div class="newsletter-form">
                                    <form "/html/tags/html_form_tag_action.cfm" method="post">
                                        <div>
                                            <textarea name="comments" id="comments"
                                                style="font-family:sans-serif;font-size:1.2em;background-color:rgb(231, 236, 241);color:rgb(14, 34, 51)">share your comment here.......</textarea>

                                        </div>
                                        <input type="submit" value="submit">
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    </div>

    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="index.php" class="admas-logo">Admas University</a>
                        </div>

                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#admas-footer-nav" aria-controls="yummyfood-footer-nav"
                                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"
                                    aria-hidden="true"></i> Menu</button>
                            <!-- Menu Area Start -->
                            <div class="collapse navbar-collapse justify-content-center" id="admas-footer-nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="home.php">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="news.php">news</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--  Top Social bar start -->
        <div class="top_social_bar">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
        </div>
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