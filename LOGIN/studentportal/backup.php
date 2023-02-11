<?php

session_start();
$id = $_SESSION["studentid"];
$con = new mysqli("localhost", "root", "200509104610", "student_details");

$table = $con->query("SELECT * FROM `student` WHERE `student_id`='$id'");
$data = $table->fetch_assoc();
echo ($data["email"]);
echo ($data["first_name"]);
echo ("  ");
echo ($data["last_name"]);

?>



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
                <span class="navbar-toggler-icon"></span>
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
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="col-12">
                <h2>Hello <span class="badge bg-cyan text-dark ">
                        <!-- <?php
                                // echo ($_SESSION["first_name"]);
                                ?> -->
            </span></h2>
            <!--- </div> -->
            <div class="col-12 bg-info">


            </div>
        </div>

        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Hello <?php
                                                                            session_start();
                                                                            echo ($_SESSION["studentid"]);
                                                                            ?>
                    <button type="button" class="btn-close justify-content-end align-items-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    I will not close if you click outside of me.
                </div>
            </div>
        </div>
    </div>






    <script src="../../bootstrap.js"></script>
</body>

</html>