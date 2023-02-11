<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="animation gif/channels4_profile-removebg-preview.png">
    <link rel="shortcut icon" type="image/ico" href="animation gif/channels4_profile-removebg-preview.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://kit.fontawesome.com/3840ac106f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>



    <!--MSG BOT-->
    <script>
        (function (w, d) {
            w.CollectId = "635204956405a40542b45cc9";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);

        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</head>

<body data-spy="scroll" data-target=".mainmenu-area" style="overflow-x: hidden;">

    <div class="preloader">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <!-- <div class="loader__ball"></div> -->
            <img class="loader__ball"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAq0lEQVRIie3TMQ4BQRxG8R+JlkKicQCdRieu4ApKV3AFrUaiVbqCK6hVClE4gRDFWoWVMNkIMQrJvuS178t/kqGgIKCcGZ0qhlhjgxHqMcItTHBAGnjCHO1Po2X0scQlJ5znCgNUXoUbbqdv34zmuccYzcdwBzMcvwiHnrFAT/Ycu4jxUFDDFEmEYJK1ngbudCMMdLNWirQULuStfsi9mfKjX/nI/w8UFHzPFYbBfW2rJeCzAAAAAElFTkSuQmCC">
        </div>
    </div>
    <!-- Mainmenu Area Murkup -->
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
        <div class="logo">
            ScienceByScience
        </div>
        <div class="nav-items">
            <li><a href="#home-section">Home</a></li>
            <li><a href="#about-section">About</a></li>
            <li><a href="#video-section">Video</a></li>
            <li><a href="#date-section">External</a></li>
            <li><a href="#contact-section">Contact</a></li>
            <li><a href="./LOGIN/studentlogin.php">Login</a></li>
        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span>
        </div>
       
        <form action="#">
            <input type="search" class="search-data" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>
    
    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = () => {
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = () => {
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";
        }
        searchBtn.onclick = () => {
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        nav {
            background:#0e0f12fc;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            height: 70px;
            padding: 0 100px;
        }

        nav .logo {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: -1px;
        }

        nav .nav-items {
            display: flex;
            flex: 1;
            padding: 0 0 0 40px;
        }

        nav .nav-items li {
            list-style: none;
            padding: 0 15px;
        }

        nav .nav-items li a {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }

        nav .nav-items li a:hover {
            color: #ff3d00;
        }

        nav form {
            display: flex;
            height: 40px;
            padding: 2px;
            background: #1e232b;
            min-width: 18% !important;
            border-radius: 2px;
            border: 1px solid rgba(155, 155, 155, 0.2);
        }

        nav form .search-data {
            width: 100%;
            height: 100%;
            padding: 0 10px;
            color: #fff;
            font-size: 17px;
            border: none;
            font-weight: 500;
            background: none;
        }

        nav form button {
            padding: 0 15px;
            color: #fff;
            font-size: 17px;
            background: #ff3d00;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        nav form button:hover {
            background: #e63600;
        }

        nav .menu-icon,
        nav .cancel-icon,
        nav .search-icon {
            width: 40px;
            text-align: center;
            margin: 0 50px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            display: none;
        }

        nav .menu-icon span,
        nav .cancel-icon,
        nav .search-icon {
            display: none;
        }

        @media (max-width: 1245px) {
            nav {
                padding: 0 50px;
            }
        }

        @media (max-width: 1140px) {
            nav {
                padding: 0px;
            }

            nav .logo {
                flex: 2;
                text-align: center;
            }

            nav .nav-items {
                position: fixed;
                z-index: 99;
                top: 70px;
                width: 100%;
                left: -100%;
                height: 100%;
                padding: 10px 50px 0 50px;
                text-align: center;
                background: #14181f;
                display: inline-block;
                transition: left 2s ease;
            }

            nav .nav-items.active {
                left: 0px;
            }

            nav .nav-items li {
                line-height: 40px;
                margin: 30px 0;
            }

            nav .nav-items li a {
                font-size: 20px;
            }

            nav form {
                position: absolute;
                top: 80px;
                right: 50px;
                opacity: 0;
                pointer-events: none;
                transition: top 0.3s ease, opacity 0.1s ease;
            }

            nav form.active {
                top: 95px;
                opacity: 1;
                pointer-events: auto;
            }

            nav form:before {
                position: absolute;
                content: "";
                top: -13px;
                right: 0px;
                width: 0;
                height: 0;
                z-index: -1;
                border: 10px solid transparent;
                border-bottom-color: #1e232b;
                margin: -20px 0 0;
            }

            nav form:after {
                position: absolute;
                content: '';
                height: 60px;
                padding: 2px;
                background: #1e232b;
                border-radius: 2px;
                min-width: calc(100% + 20px);
                z-index: -2;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                transition-duration: 5s;
            }

            nav .menu-icon {
                display: block;
            }

            nav .search-icon,
            nav .menu-icon span {
                display: block;
            }

            nav .menu-icon span.hide,
            nav .search-icon.hide {
                display: none;
            }

            nav .cancel-icon.show {
                display: block;
            }
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
        }

        .content header {
            font-size: 30px;
            font-weight: 700;
        }

        .content .text {
            font-size: 30px;
            font-weight: 700;
        }

        .space {
            margin: 10px 0;
        }

        nav .logo.space {
            color: red;
            padding: 0 5px 0 0;
        }

        @media (max-width: 980px) {

            nav .menu-icon,
            nav .cancel-icon,
            nav .search-icon {
                margin: 0 20px;
            }

            nav form {
                right: 30px;
            }
        }

        @media (max-width: 350px) {

            nav .menu-icon,
            nav .cancel-icon,
            nav .search-icon {
                margin: 0 10px;
                font-size: 16px;
            }
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .content header {
            font-size: 30px;
            font-weight: 700;
        }

        .content .text {
            font-size: 30px;
            font-weight: 700;
        }

        .content .space {
            margin: 10px 0;
        }
    </style>

    <!-- Header Area -->
    <header class="header-area ripple " id="home-section" style="z-index: 5;">
        <div class="container" style="overflow-x: hidden;">
            <div class="row ">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h1 class="header-title wow fadeInUp" data-wow-delay="0.2s">SAHAN I HERATH</h1>
                    <h4 class="heder-subtitle wow fadeInUp" data-wow-delay="0.4s">Lecturer / TEACHER</h4>
                    <!-- <div class="header-countdown wow fadeInUp" data-wow-delay="0.6s">
                        <ul id="countdown"></ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="smoth">
            <a href="#about-section" class="scrolldown"><i class="fa fa-arrow-down"></i></a>
        </div>



    </header>

    <!-- About-Section -->
    <section id="about-section" style="overflow-x: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title" title="About Us"><span class="abouttxt">About Us</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="about-content row">
                        <div class="about-photo col-xs-12 col-md-5">
                            <img src="images/sahan sir img 1.jpg" alt="">
                        </div>
                        <div class="about-text col-xs-12 col-md-7">
                            <p>Sahan I Herath Is a Professional and results in Oriented Science Instructor who is
                                passionate about Moder</p>
                            <p>
                                Multimedia Content Creator at The Academy, Podcaster at Beyond The Range-Sinhala Podcast
                                and Visiting Lecturer at ESOFT Metro Campus</p>
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus in nisl quis
                                risus ultricies finibus. Cras eget diam sodales.</p>
                            <!-- <div class="signature">
                                    <img src="images/signiture.png" alt=""> <br />
                                </div> -->
                            <a href="#" class="button white">Read More</a>
                            <img class="sprite1" src="animation gif/connection.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Team-Section -->
    <section id="team-section" style="background-color: rgb(218, 159, 137);overflow-x: hidden;" class="hidemytext">
        <div class="container" id="#team-section">
            <div class="row">
                <a href="#team-section" class="scrolldown"><i></i></a>
                <div class="col-xs-12 ">
                    <h2 class="section-title" style="margin-top: 10px;" title="Team"><span>Team</span></h2>
                </div>
            </div>
            
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-lg-offset-3" style="overflow-x: hidden;">
            <div class="single-team">
                <div class="team-photo">
                    <img src="images/team/sahan 5.jpg">
                </div>
                <div class="team-data">
                    <h4>Sahan Induwara</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="overflow-x: hidden;">
            <div class="single-team">
                <div class="team-photo">
                    <img src="images/team/Thilani teacher stock photo.jpg" alt="">
                </div>
                <div class="team-data">
                    <h4>Thilani Rathnayake</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-team">
                            <div class="team-photo">
                                <img src="images/team/team-4.jpg" alt="">
                            </div>
                            <div class="team-data">
                                <h4>Fabiana Herrera</h4>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="#" class="button pink">View Team</a>
            </div>
        </div>
        </div>
    </section>

    <!-- Student-Section -->
    <section class="gray-bg" id="client-section" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title" title="Clients"><span>Student</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="testimonials">
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, quo. Esse
                                consequatur perferendis impedit quibusdam, eius cupiditate. Nulla sit quidem numquam
                                laborum magni, explicabo, nisi consectetur omnis, aperiam adipisci consequuntur.</p>
                            <div class="media">
                                <div class="media-left testimonial-photo">
                                    <img src="images/testimonial/client-2.png" alt="">
                                </div>
                                <div class="media-right media-middle testimonial-data">
                                    <h5>UNKNOWN</h5>
                                    <span>STUDENT</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, quo. Esse
                                consequatur perferendis impedit quibusdam, eius cupiditate. Nulla sit quidem numquam
                                laborum magni, explicabo, nisi consectetur omnis, aperiam adipisci consequuntur.</p>
                            <div class="media">
                                <div class="media-left testimonial-photo">
                                    <img src="images/testimonial/client-2.png" alt="">
                                </div>
                                <div class="media-right media-middle testimonial-data">
                                    <h5>UNKNOWN</h5>
                                    <span>STUDENT</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, quo. Esse
                                consequatur perferendis impedit quibusdam, eius cupiditate. Nulla sit quidem numquam
                                laborum magni, explicabo, nisi consectetur omnis, aperiam adipisci consequuntur.</p>
                            <div class="media">
                                <div class="media-left testimonial-photo">
                                    <img src="images/testimonial/client-2.png" alt="">
                                </div>
                                <div class="media-right media-middle testimonial-data">
                                    <h5>UNKNOWN</h5>
                                    <span>STUDENT</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, quo. Esse
                                consequatur perferendis impedit quibusdam, eius cupiditate. Nulla sit quidem numquam
                                laborum magni, explicabo, nisi consectetur omnis, aperiam adipisci consequuntur.</p>
                            <div class="media">
                                <div class="media-left testimonial-photo">
                                    <img src="images/testimonial/client-2.png" alt="">
                                </div>
                                <div class="media-right media-middle testimonial-data">
                                    <h5>UNKNOWN</h5>
                                    <span>STUDENT</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, quo. Esse
                                consequatur perferendis impedit quibusdam, eius cupiditate. Nulla sit quidem numquam
                                laborum magni, explicabo, nisi consectetur omnis, aperiam adipisci consequuntur.</p>
                            <div class="media">
                                <div class="media-left testimonial-photo">
                                    <img src="images/testimonial/client-2.png" alt="">
                                </div>
                                <div class="media-right media-middle testimonial-data">
                                    <h5>UNKNOWN</h5>
                                    <span>STUDENT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Video-Section -->
    <section id="video-section" style="background-color: rgb(176, 146, 121);" class="hidemytext">
        <div class="container">
            <a href="https://www.youtube.com/channel/UCeYkElNkcDqExs3IsTg1U8Q/channels">
                <img class="imgvideo1 blogimg1" src="animation gif/channels4_profile-removebg-preview.png" alt="">
            </a>

            <img class="imgvideo2 blogimg1" src="animation gif/channels4_profile__1_-removebg-preview.png" />
            <img class="imgvideo3 blogimg1" src="animation gif/channels4_profile__2_-removebg-preview.png" alt="">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <h2 class="section-title" title="Video"><span>Video</span></h2>
                    <a href="https://www.youtube.com/channel/UCeYkElNkcDqExs3IsTg1U8Q">
                        <h5 style="font-weight: bold; color: rgb(9, 56, 56); margin-left: 10%;">Go to youTube <i
                                class="fa fa-arrow-circle-o-right"></i></h5>
                    </a>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-0 videostyle scaleipvideo" style="margin-top: 10px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed src="https://www.youtube.com/embed/A4ByJJ3QmnE"
                            class="video-control embed-responsive-item" ></embed>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-0 videostyle scaleipvideo" style="margin-top: 10px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed src="https://www.youtube.com/embed/dxFST2H14SE"
                            class="video-control embed-responsive-item" controls>

                        </embed>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-0 videostyle scaleipvideo" style="margin-top: 10px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed src="https://www.youtube.com/embed/2VmjPayCMtk"
                            class="video-control embed-responsive-item" controls>

                        </embed>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-0 videostyle scaleipvideo" style="margin-top: 10px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed src="https://www.youtube.com/embed/Rlu4e8vAgY8"
                            class="video-control embed-responsive-item" controls>
                        </embed>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-0 videostyle scaleipvideo" style="margin-top: 10px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed src="https://www.youtube.com/embed/ZtZFX_rPcxU"
                            class="video-control embed-responsive-item" controls>
                        </embed>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-0 videostyle scaleipvideo" style="margin-top: 10px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed src="https://www.youtube.com/embed/opJR3q6Msks"
                            class="video-control embed-responsive-item" controls>
                        </embed>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Date-Movie -->
    <section id="date-section" class="hidemytext">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title" title="DATE CINEMA"><span>EXTERNAL ACCESS</span></h2>
                </div>
            </div>
            <div class="row tablebg">
                <div class="col-xs-12 col-md-10 col-md-offset-1 date-list tablebg2">
                    <div class="table-responsive ">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="movie-date"><span><i class="fa-solid fa-podcast blogimg1"></i> <br />
                                            <span></span></span>
                                    </td>
                                    <td><span class="movie-title">Beyond The <br>Range-Sinhala Podcast <br />
                                            <small> ANCHOR
                                            </small></span></td>
                                    <td>
                                        <p class="paragraph">We are Beyond The Range Sinhala Podcast hosted by sahan
                                            Induwara &
                                            Thilani Rathnayake. Generally we discuss the topics we deal with
                                            everyday life in number of aspects as Psychology, Law, Science &
                                            Technology and Buddhist Philosophy.</p>
                                    </td>
                                    <td><a href="https://anchor.fm/beyondtherange?fbclid=IwAR3P1vF-i65CPp6NbeTLeubvWfXapIs73VhdsWswLg8z2237XnFpOeBq_ZM"
                                            class="button white btnscale">Explor Here</a></td>
                                </tr>
                                <tr>
                                    <td class="movie-date"><span><i class="fa-brands fa-youtube"></i> <br />
                                            <span></span></span>
                                    </td>
                                    <td><span class="movie-title">The Academy SL <br /> Youtube<small>
                                            </small></span></td>
                                    <td>
                                        <p class="paragraph"> The Academy Sri Lankan best education platform.
                                            we are Creating educational videos to uplift the education standard of
                                            Sri Lankan students.
                                            Feel free to share,like,and we cordially invite you to subscribe our
                                            channel for latest updates.</p>
                                    </td>
                                    <td><a href="https://www.youtube.com/channel/UCeYkElNkcDqExs3IsTg1U8Q"
                                            class="button white btnscale">Go YouTube</a></td>
                                </tr>
                                <tr>
                                    <td class="movie-date"><span> <i class="fa fa-youtube-play"></i> <br />
                                            <span></span></span>
                                    </td>
                                    <td><span class="movie-title">The Academy SL <br>Kids <br /> <small> YouTube
                                            </small></span></td>
                                    <td>
                                        <p class="paragraph">We are The Academy SL Kids, the first and the best kids
                                            educational and
                                            Edu entertainment you tube channel hosted by kids and teenagers.
                                            All content are done by the students of Sahan I Herath Academy of
                                            Science.
                                            ​</p>
                                    </td>
                                    <td><a href="https://www.youtube.com/channel/UCgO0HBL8ZX2gLaEdJjhCgHw"
                                            class="button white btnscale">Go YouTube</a></td>
                                </tr>
                                <tr ">
                                        <td class=" movie-date"><span><img class="blogimg1" style="margin-top: 30px;"
                                            src="animation gif/icons8-verge-96.png" alt=""> <br /> <span>
                                            </td>
                                            <td><span class="movie-title vlogmt"> <br />The Academy SL
                                                    <small>vlogs</small></span></td>
                                            <td>
                                                <p class="paragraph">The Academy SL Live" subsidiary of "The Academy
                                                    SL" You
                                                    tube Channel
                                                    This Channel Is dedicated to Our Live Video Sessions on
                                                    science,maths
                                                    and Other Subjects.
                                                    Hope you will enjoy the Content</p>
                                            </td>
                                            <td><a href="https://www.youtube.com/channel/UClDwnvLiWuYRTIAqTuyGyXA"
                                                    class="button white btnscale">Go YouTube</a></td>
                                </tr>
                                <!-- <tr>
                                        <td class="movie-date"><span>16 <br /> <span>June</span></span>
                                        </td>
                                        <td><span class="movie-title">Title of movie <br /> <small> &copy; 00:00 PM -
                                                    CINEMA</small></span></td>
                                        <td>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta
                                                quibusdam ducimus! Ratione, laborum nostrum.</p>
                                        </td>
                                        <td><a href="#" class="button white">Order Ticket</a></td>
                                    </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery-Section -->
    <section class="gray-bg" id="gallery-section" style="overflow-x: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title" title="Gallery"><span>Gallery</span></h2>
                </div>
            </div>
            <div class="row gallery">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-gallery">
                        <div class="gallery-photo">
                            <img src="images/gallery/unnamed.jpg" alt="">
                        </div>
                        <div class="gallery-details">
                            <div value="New Tab"
                                onclick="window.open('https://www.youtube.com/watch?v=A4ByJJ3QmnE&t=4s')"><i
                                    class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-gallery">
                        <div class="gallery-photo">
                            <img src="images/gallery/unnamed (1).jpg" alt="">
                        </div>
                        <div class="gallery-details">

                            <div value="New Tab" onclick="window.open('https://www.youtube.com/watch?v=ZtZFX_rPcxU')"><i
                                    class="fa fa-play"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single-gallery">
                        <div class="gallery-photo">
                            <img src="images/gallery/unnamed (2).jpg" alt="">
                            <div class="gallery-details">

                                <div value="New Tab"
                                    onclick="window.open('https://www.youtube.com/channel/UCeYkElNkcDqExs3IsTg1U8Q/community?lb=UgxLT03zhhNGPKTD-xF4AaABCQ')">
                                    <i class="fa fa-play"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="#" class="button pink">See More</a>
                    </div>
                </div>
            </div>
    </section>

    <!-- Contact-Section -->
    <section id="contact-section" style="background: linear-gradient(-45deg, #ee7752, #cc648c, #23a6d5, #23d5ab);
        
        animation: gradient 15s ease infinite;
        height: 120vh;
    ">
        <div class="container overflow-hidden">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title" title="Contact us"><span>Contact Us</span></h2>
                </div>
            </div>
            <div class="row" style="overflow-x: hidden;">
                <div class="col-xs-12 col-lg-6">
                    <form action="#" class="row contact-form">
                        <div class="col-xs-12 col-sm-6">
                            <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name"
                                required>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input type="email" class="form-control" id="form-email" name="form-email"
                                placeholder="Email" required>
                        </div>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="form-subject" name="form-subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="col-xs-12">
                            <textarea class="form-control" rows="6" id="form-message" name="form-message"
                                placeholder="Message" required></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-3 text-right pull-right">
                            <button type="submit" class="button pink">Submit</button>
                        </div>
                        <div class="col-xs-12 col-sm-5 hidden-xs">
                            <address>
                                <strong>Telephone </strong>: +94 111 1111 <br>
                                <strong>Email </strong>: example@example.com <br>
                                <strong>Address </strong>: ....
                            </address>
                        </div>
                        <div class="col-xs-12 col-lg-3 col-sm-4">
                            <ul class="social border">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-lg-6 hidden-xs hidden-md">
                    <svg width="40%" height="50vh" class="svgmg" viewBox="0 0 837 1045" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            sketch:type="MSPage">
                            <path
                                d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z"
                                id="Polygon-1" stroke="#007FB2" stroke-width="6" sketch:type="MSShapeGroup">
                            </path>
                            <path
                                d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z"
                                id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup">
                            </path>
                            <path
                                d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z"
                                id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup">
                            </path>
                            <path
                                d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z"
                                id="Polygon-4" stroke="#F2773F" stroke-width="6" sketch:type="MSShapeGroup">
                            </path>
                            <path
                                d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z"
                                id="Polygon-5" stroke="#36B455" stroke-width="6" sketch:type="MSShapeGroup">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-Area -->
    <footer class="pink-bg footer-area" style="overflow-x: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy; 2022 Dream Design. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/ripples-min.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>

</body>




</html>