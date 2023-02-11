<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand text-white disabled"><?php

                                                                // session_start();
                                                                // $id = $_SESSION["studentid"];
                                                                // $con = new mysqli("localhost", "root", "200509104610", "student_details");

                                                                // $table = $con->query("SELECT * FROM `student` WHERE `student_id`='$id'");
                                                                // $data = $table->fetch_assoc();
                                                                // // echo($data["email"]);
                                                                // echo ($data["first_name"]);
                                                                // echo ("  ");
                                                                // echo ($data["last_name"]);
                                                                // $_SESSION["first_name"] = $data["first_name"];

                                                                ?></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" data-bg-color="#fff"></span>
            </button>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                Profile
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home </a>

                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link disabled text-bg-dark">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" style="margin: 2px;" type="submit">Search</button>

                </form>
                <a href="../logout.php"><button class="btn mt-3 mt-lg-0" style="margin: 2px; background-color: aqua;">Log Out</button></a>

            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row">


            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-lg-6 " >
                <div class="card mb-3" style="max-height: 540px;" style="height:500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../resources/text.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Time Table</h5>
                                <p class="card-text">...</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-2 bg-info">

        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" style="background-color: #00b4d8;" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Hello </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-white">
                <div class="row rounded" style="background-color:#1d3557 ; height: 500px;">
                    <div class="col-12 text-center mt-2">
                        <h2>Student Details</h2>
                    </div>
                    <div class="col-12 mt-2"><img src="./default-profile-pic.png" class="rounded-circle mx-auto d-block" alt="Profile pic"></div>
                    <hr class="mt-3">
                    <div class="col-12">
                        <ul class="list-group ">
                            <li class="list-group-item"><?php
                                                        $name = $_SESSION["studentid"];
                                                        $con = new mysqli("localhost", "root", "200509104610", "student_details");
                                                        $nametable = $con->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                                                        $nametable = $nametable->fetch_assoc();
                                                        echo ($nametable["first_name"]);
                                                        echo (" ");
                                                        echo ($nametable["last_name"]);
                                                        ?>

                            </li>
                            <li class="list-group-item"><?php
                                                        $name = $_SESSION["studentid"];
                                                        $con = new mysqli("localhost", "root", "200509104610", "student_details");
                                                        $nametable = $con->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                                                        $nametable = $nametable->fetch_assoc();
                                                        echo ($nametable["student_id"]);
                                                        ?></li>
                            <li class="list-group-item"><?php
                                                        $name = $_SESSION["studentid"];
                                                        $con = new mysqli("localhost", "root", "200509104610", "student_details");
                                                        $nametable = $con->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                                                        $nametable = $nametable->fetch_assoc();
                                                        echo ($nametable["email"]);
                                                        ?></li>
                            <li class="list-group-item">Grade <?php
                                                                $name = $_SESSION["studentid"];
                                                                $con = new mysqli("localhost", "root", "200509104610", "student_details");
                                                                $nametable = $con->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                                                                $nametable = $nametable->fetch_assoc();
                                                                echo ($nametable["grade"]);
                                                                ?></li>
                            <li class="list-group-item"><?php
                                                        $name = $_SESSION["studentid"];
                                                        $con = new mysqli("localhost", "root", "200509104610", "student_details");
                                                        $nametable = $con->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                                                        $nametable = $nametable->fetch_assoc();
                                                        echo ($nametable["mobile"]);
                                                        ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../bootstrap.js"></script>
</body>

</html>