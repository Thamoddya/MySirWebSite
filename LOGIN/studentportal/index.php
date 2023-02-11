<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Thamoddya Rashmitha" />
    <title>Student | ScienceByScience</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- <script src="https://kit.fontawesome.com/3840ac106f.js" crossorigin="anonymous"></script> -->
</head>

<body >

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top" id="sideNav" style="background-color: #e5989b;">
        <a class="navbar-brand js-scroll-trigger text-white" href="#page-top">
            <span class="d-block d-lg-none"><?php
                                            session_start();
                                            $name = $_SESSION["studentid"];
                                            include "../../connection.php";
                                            $nametable = $c->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                                            $nametable = $nametable->fetch_assoc();
                                            $studentgrade = $nametable["grade"];
                                            $studentcityid = $nametable["city_id"];
                                            echo ($nametable["first_name"]);
                                            echo (" ");
                                            echo ($nametable["last_name"]);

                                            ?></span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler  d-none d-sm-none d-lg-flex" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse  d-none d-sm-none d-lg-flex" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#timetable">Time Table</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#events">events</a></li>

            </ul>
        </div>
    </nav>


    

    <!-- Page Content-->
    <div class="container-fluid p-0" style="background-color:#f2cc8f;overflow-x: hidden;">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">

                    <?php echo ($nametable["first_name"]);
                    $findcity = $c->query("SELECT * FROM city WHERE id = '$studentcityid'");
                    $cityofstudent =  $findcity->fetch_assoc();
                    $tablecity = $cityofstudent["name"]; ?>
                    <span class="text-primary"><?php echo ($nametable["last_name"]); ?></span>
                </h1>
                <div class="subheading mb-5">
                    Science By Science · Grade <?php echo ($nametable["grade"]); ?>
                    <a href="mailto:name@email.com"><?php echo ($nametable["email"]); ?></a>
                </div>
                <p class="lead mb-5"></p>
                <div class="social-icons">
                    <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                </div>
                
                <a href="./student.php"><h3 class="mt-5">Exams And Other Modeuls</h3></a>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Classes-->
        <section class="resume-section" id="timetable">
            <div class="resume-section-content row">
                <h2 class="mb-5" onclick="checkimageqwr();">Time Table</h2>
                <img class="col-12 rounded-2 " id="checkimage" src="../ADMIN PAGE/<?php
                                                                                    $test1 = $c->query("SELECT * FROM `timetable` WHERE city = '$tablecity' AND grade = '$studentgrade' ORDER BY `id` DESC LIMIT 1");
                                                                                    $test2 = $test1->fetch_assoc();
                                                                                    echo ($test2["path"]); ?>" />
                <p class=" text-center" style="color: #1d3557;font-weight: bolder;"><?php echo ($test2["massage"]); ?></p>
                <a class="btn btn-primary" href="../ADMIN PAGE/<?php echo ($test2["path"]); ?> "><button class="btn btn-primary fw-bold">Douwnload TimeTable</button></a>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content row">
                <h2 class="mb-5 col-12">Education</h2>
                <div class="col-12 col-lg-6">
                    <div class="container12 row d-flex justify-content-center">
                        <div class="card col-12">
                            <h1 class="title">Student ID</h1>
                            <ul style="color: #1d3557;list-style: square;">
                                <li>ID -<?php echo ($nametable["student_id"]); ?></li>
                                <li><?php echo ($nametable["mobile"]); ?></li>
                                <li><?php echo ($nametable["email"]); ?></li>
                                <li>Grade - <?php echo ($nametable["grade"]); ?></li>
                            </ul>
                            <!-- <button class="btn">Started</button> -->
                        </div>
                        <div class="card col-12 mt-3 mt-lg-5">
                            <h1 class="title">Update Your Details</h1>
                            <p class="subtitle">
                                Please Note you can't update your Student ID.You Can only change your Email & Password only.If You want to update your other details please contact the Admin.
                            </p>
                            <button class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Update</button>
                        </div>
                        <div class="blob d-none d-sm-flex"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                    <div class="row">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img style="height: 100vh;" src="./assets/img/pexels-ali-pazani-2777898.jpg" class="d-block w-100 rounded-1" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img style="height: 100vh;" src="./assets/img/pexels-pixabay-39603.jpg" class="d-block w-100 rounded-1" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img style="height: 100vh;" src="./assets/img/pexels-mikhail-nilov-7672018.jpg" class="d-block w-100 rounded-1" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profile Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <label class="text-white">Your Email</label>
                <ul>
                    <li class="text-white"><?php echo ($nametable["email"]); ?></li>
                </ul>
                <label class="text-white">Your Password</label>
                <ul>
                    <li class="text-white">**********</li>
                </ul>
                <hr>
                <p id="passwordresponsetext" style="color: #fa709a;font-weight: bold;"></p>
                <p>Consider About this..,</p>
                <ul>
                    <li>At least 8 characters long</li>
                    <li>Contains at least one uppercase letter</li>
                    <li>Contains at least one lowercase letter</li>
                    <li>Contains at least one digit</li>
                </ul>
                <h4>Update Your Password</h4>
                <input class="col-12 rounded-2 border-primary" type="text" id="newPassword" placeholder="New Password">
                <button onclick="UpdatePassword();" class="btn btn-default col-12 square mt-1">Update Password</button>
                <hr>
                <p id="passwordresponsetext" style="color: #fa709a;font-weight: bold;"></p>
                <p>Consider About this..,</p>
                <ul>
                    <li>username @ example.com</li>
                </ul>
                <h4>Update Your Email</h4>
                <input class="col-12 rounded-2 border-primary" type="text" id="newEmail" placeholder="New Email">
                <button onclick="UpdateEmail();" class="btn btn-default col-12 square mt-1">Update Email</button>
            </div>
        </div>
        <style>
            /* hide scrollbar but allow scrolling */
            element {
                -ms-overflow-style: none;
                /* for Internet Explorer, Edge */
                scrollbar-width: none;
                /* for Firefox */
                overflow-y: scroll;
            }

            element::-webkit-scrollbar {
                display: none;
                /* for Chrome, Safari, and Opera */
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            .example {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }

            .card {
                background: rgba(255, 255, 255, 0.15);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                backdrop-filter: blur(18px);
                border: 1px solid rgba(255, 255, 255, 0.18);
                border-radius: 1rem;
                padding: 1.5rem;
                z-index: 10;
                color: whitesmoke;
            }

            .title {
                font-size: 2.2rem;
                margin-bottom: 1rem;
            }

            .subtitle {
                font-size: 1rem;
                margin-bottom: 2rem;
                color: #1d3557;
            }

            .btn {
                background: none;
                border: none;
                text-align: center;
                font-size: 1rem;
                color: whitesmoke;
                background-color: #fa709a;
                padding: 0.8rem 1.8rem;
                border-radius: 2rem;
                cursor: pointer;
            }

            .blob {
                position: absolute;
                width: 50%;
                height: 70vh;
                background: linear-gradient(180deg, rgba(47, 184, 255, 0.42) 31.77%, #5c9df1 100%);
                mix-blend-mode: color-dodge;
                animation: move 25s infinite alternate;
                transition: 1s cubic-bezier(0.07, 0.8, 0.16, 1);
            }

            .blob:hover {
                width: 520px;
                height: 520px;
                filter: blur(30px);
                box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.6),
                    inset 100px 100px 0 0px #fa709a,
                    inset 200px 200px 0 0px #784ba8,
                    inset 300px 300px 0 0px #2b86c5;
            }

            @-webkit-keyframes move {
                from {
                    transform: translate(-100px, -50px) rotate(-90deg);
                    border-radius: 24% 76% 35% 65% / 27% 36% 64% 73%;
                }

                to {
                    transform: translate(200px, 100px) rotate(-10deg);
                    border-radius: 76% 24% 33% 67% / 68% 55% 45% 32%;
                }
            }

            @keyframes move {
                from {
                    transform: translate(-100px, -50px) rotate(-90deg);
                    border-radius: 24% 76% 35% 65% / 27% 36% 64% 73%;
                }

                to {
                    transform: translate(200px, 100px) rotate(-10deg);
                    border-radius: 76% 24% 33% 67% / 68% 55% 45% 32%;
                }
            }
        </style>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="events">
            <div class="resume-section-content">
                <h2 class="mb-5">Events</h2>
                <div class="subheading mb-3">More About ScienceByScience</div>
                <ul class="list-inline dev-icons">

                    <li class="list-inline-item"><i class="fa fa-microscope"></i></li>
                    <li class="list-inline-item"><i class="fa fa-atom"></i></li>
                    <li class="list-inline-item"><i class="fa fa-flask"></i></li>
                    <li class="list-inline-item"><i class="fa fa-flask-vial"></i></li>
                    <li class="list-inline-item"><i class="fa fa-bottle-water"></i></li>

                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <!-- <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Functional Teams
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Agile Development & Scrum
                    </li> -->
                </ul>
            </div>
        </section>
        <hr class="m-0" />

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <script src="./studentportal.js"></script>
</body>

</html>