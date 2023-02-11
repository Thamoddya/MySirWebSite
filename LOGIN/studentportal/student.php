<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exams And Assigments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #0e9594;">
        <div class="container-fluid">
            <a class="navbar-brand user-select-none" href="#">
                <?php
                if (isset($_SESSION["studentid"])) {
                    $name = $_SESSION["studentid"];
                    include "../../connection.php";
                    $nametable = $c->query("SELECT * FROM `student` WHERE `student_id`='$name'");
                    $nametable = $nametable->fetch_assoc();
                    $studentgrade = $nametable["grade"];
                    $studentcityid = $nametable["city_id"];
                    echo ($nametable["first_name"]);
                    echo (" ");
                    echo ($nametable["last_name"]);
                } else {
                    echo "No DATA HERE";
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link user-select-none" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link user-select-none" href="#">MARKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link user-select-none" href="#">MAIN PAGE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 col-sm-6 col-lg-3 overflow-auto" style="background-color: #fed9b7;height: 80vh;">
                <div class="row ">
                    <div class="col-12 fs-3 fw-bold text-center"
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        INBOX
                    </div>
                    <hr>
                    <div class="col-12 mt-2">
                        <text class="text-danger fs-6 user-select-none">Note : You Can Chat With Your Admin
                            Only...</text>
                    </div>
                    <div class="col-12 mt-5 overflow-auto">
                        <div class="row">
                            <?php
                            if (isset($_SESSION["studentid"])) {
                                include "../../connection.php";
                                $massageFromTable = $c->query("SELECT * FROM massage WHERE to_id ='$name'");
                                for ($x = 0; $x < $massageFromTable->num_rows; $x++) {
                                    $GetMassageFromtable = $massageFromTable->fetch_assoc();
                                    ?>
                                    <div class="col-12 fw-bold text-start user-select-none ">
                                        <?php echo ($GetMassageFromtable["massage"]); ?>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "No DATA HERE";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $selectStudentcity = $c->query("SELECT * FROM `student` WHERE `student_id`='$name'");
            $fetchDataForStudentToFindstudentData = $selectStudentcity->fetch_assoc();
            $cityIDOFStudent = $fetchDataForStudentToFindstudentData["city_id"];
            $GradeOfStudent = $fetchDataForStudentToFindstudentData["grade"];
            ?>
            <div class="col-12 col-sm-6 col-lg-5" style="background-color: #ffcfd2;">
                <div class="row mt-sm-3">
                    <div class="col-12">
                    </div>
                    <div class="row">
                        <h5 class="text-center fw-bold mt-1">Find Your ClassMates</h5>
                        <p>&#9734; <span class="text-danger text-decoration-underline">This is only for Educational
                                purposes</span></p>
                        <div class="col-12 overflow-x-auto overflow-y-scroll d-flex align-items-start justify-content-center "
                            style="height: 350px">
                            <table class="table overflow-auto table-bordered border-dark ">
                                <thead>
                                    <tr class="overflow-auto">
                                        <th class='text-center'>Name</th>
                                        <th class='text-center'>Grade</th>
                                        <th class='text-center'>Contact Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require "../../connection.php";
                                    $getstudentdataquery = $c->query("SELECT * FROM `student` WHERE `city_id` = '$cityIDOFStudent' AND `grade`='$GradeOfStudent'");
                                    if ($getstudentdataquery->num_rows > 0) {
                                        // echo "<table>";
                                        // output data of each row
                                        while ($row = $getstudentdataquery->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td class='text-center'>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                                            echo "<td class='text-center'>" . $row["grade"] . "</td>";
                                            echo "<td class='text-center'>" . $row["mobile"] . "</td>";
                                            ?>
                                            </tr>
                                            <?php
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>