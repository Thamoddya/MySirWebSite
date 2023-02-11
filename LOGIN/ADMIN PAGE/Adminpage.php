<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://kit.fontawesome.com/3840ac106f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assests/build/css/adminpage.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body onload="setname();" style="margin: 0; overflow-x: hidden;">

    <nav class="navbar  align-baseline " style="background-color: #003566;">
        <div class="container-fluid">
            <a class="navbar-brand text-white fs-6" href="#">
                <?php
                session_start();
                echo ($_SESSION["email"]); ?>
            </a>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" onclick="clertdata();">Search</button>

            </form>

        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <table class="table table-bordered mt-4">
                            <thead></thead>
                            <tbody>
                                <tr class="table-info">
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-eye"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                <?php
                                                require "../../connection.php";
                                                $getcountQuery = $c->query("SELECT COUNT(student_id) FROM student");
                                                $getcountofstuydentsafterquery = $getcountQuery->fetch_assoc();
                                                echo $getcountofstuydentsafterquery["COUNT(student_id)"];
                                                ?>
                                                <br /><sub>Students</sub>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                120 <br /><sub>MAILS</sub>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-info">
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-file"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                2000 <br /><sub>FILES</sub>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa-brands fa-sellcast"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                350 <br /><sub>SELLERS</sub>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card mb-3" style="max-width: 540px">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center"
                                    style="background-color: #0a9396">
                                    <br />
                                    <i class="fa fa-star fs-2 p-3" style="color: white"></i>
                                    <br />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex justify-content-center align-items-center"
                                        style="background-color: #43aa8b">
                                        <h5 class="card-title text-white text-center">
                                            4000 <br /><sub
                                                class="d-flex justify-content-center align-items-center">Ratings
                                                Received</sub>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <table class="table table-bordered mt-4">
                            <thead></thead>
                            <tbody>
                                <tr class="table-info">
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa fa-share-nodes"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                1000 <br /><sub>SHARES</sub>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa fa-wifi"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                600 <br /><sub>NETWORK</sub>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-info">
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa fa-rotate-right"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                3550 <br /><sub>RETURNS</sub>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                                            <div class="col-6 text-center">
                                                100% <br /><sub>ORDER</sub>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card mb-3" style="max-width: 540px">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center align-items-center"
                                    style="background-color: #0a9396">
                                    <br />
                                    <i class="fa-solid fa-trophy fs-2 p-3" style="color: white"></i>
                                    <br />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex justify-content-center align-items-center"
                                        style="background-color: #43aa8b">
                                        <h5 class="card-title text-white text-center">
                                            17 <br /><sub
                                                class="d-flex justify-content-center align-items-center">Achievements</sub>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="color: #0a9396; stroke: 120% #0a9396" />
                    <!-- Employee -->
                    <div class="col-12 col-sm-12">
                        <nav class="navbar bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand d-none d-sm-flex">Find Registed Students</a>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Find User"
                                        aria-label="Search" />
                                    <button class="btn btn-outline-success" type="submit">
                                        Search
                                    </button>
                                </form>
                            </div>
                        </nav>
                        <div class="row mt-sm-3">
                            <div class="row overflow-x-auto overflow-y-scroll">
                                <div class="col-12" style="height: 350px">
                                    <table class="table overflow-auto">
                                        <thead>
                                            <tr class="overflow-auto">
                                                <th>First Name</th>
                                                <th><span>Last Name</span> <span>Date</span></th>
                                                <th>Grade</th>
                                                <th>Contact Number</th>
                                                <th>More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require "../../connection.php";
                                            $getstudentdataquery = $c->query("SELECT * FROM student");
                                            if ($getstudentdataquery->num_rows > 0) {
                                                // echo "<table>";
                                                // output data of each row
                                                while ($row = $getstudentdataquery->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["first_name"] . "</td>";
                                                    echo "<td>" . $row["last_name"] . "</td>";
                                                    echo "<td>" . $row["grade"] . "</td>";
                                                    echo "<td>" . $row["mobile"] . "</td>";
                                                    ?>
                                                    <td>
                                                        <div class="dropup-center dropup">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#"><i
                                                                            class="fa-solid fa-trash"></i>Delete
                                                                        User</a>
                                                                </li>
                                                                <li class="dropdown-item" type="button"
                                                                    data-bs-toggle="offcanvas"
                                                                    data-bs-target="#offcanvasExample2"
                                                                    aria-controls="offcanvasExample">
                                                                    <i class="fa-solid fa-circle-info"></i>Edit
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
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
            <div class="col-12 col-sm-6">
                <div class="row">
                    <div class="row">
                        <div class="col-12">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <h3>Register a new Student</h3>
                                </div>
                                <hr />
                                <div class="col-12">
                                    <label>Student ID</label>
                                    <input type="text" class="input-group rounded" placeholder="Student ID HERE"
                                        id="studentID" />
                                    <br />
                                    <label>Student First Name</label>
                                    <input type="text" class="input-group rounded" placeholder="Student First Name HERE"
                                        id="studentFirstName" />
                                    <br />
                                    <label>Student Last Name</label>
                                    <input type="text" class="input-group rounded" placeholder="Student Last Name HERE"
                                        id="studentlastname" />
                                    <br />
                                    <label>Student Mobile</label>
                                    <input type="text" class="input-group rounded" placeholder="Student Mobile HERE"
                                        id="studentMobile" />
                                    <br />
                                    <label>Student Email Address</label>
                                    <input type="text" class="input-group rounded"
                                        placeholder="Student Email Address HERE" id="studentEmail" />
                                    <br />
                                    <label>Student Password</label>
                                    <input type="text" class="input-group rounded" placeholder="Student Password HERE"
                                        id="studentPassword" />
                                    <br />
                                    <label>Student Grade</label>
                                    <input type="text" class="input-group rounded" placeholder="Student Grade HERE"
                                        id="studentGrade" />
                                        <br>
                                    <label >Select City Of the Student</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text "
                                            style="background-color: #06d6a0; font-weight: bold;"
                                            for="inputGroupSelect01">Select</label>
                                        <select class="form-select"
                                            style="background-color: #06d6a0; font-weight: bold;" id="studentCity">
                                            <?php
                                            include "../../connection.php";
                                            $t = $c->query("SELECT * FROM `city`");
                                            for ($i = 0; $i < $t->num_rows; $i++) {
                                                $r = $t->fetch_assoc();
                                                ?>
                                                <option>
                                                    <?php echo $r["name"];
                                                    ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="fw-bold" id="studentRegisterErrorMsg"></p>
                                    <button class="btn btn-primary" onclick="addNewStudent();">Add Student</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tabletext {
            font-size: 25px;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>


    <div class="container-fluid">
        <div class="row" style="background-color:#ecf1ff;">
            <div class="col-12 col-lg-4 mt-3">
                <select class="form-select" id="cityName" style="background-color: #06d6a0; font-weight: bold;"
                    onchange="loadname();">
                    <?php
                    include "../../connection.php";
                    $t = $c->query("SELECT * FROM `city`");
                    for ($i = 0; $i < $t->num_rows; $i++) {
                        $r = $t->fetch_assoc();
                        ?>
                        <option>
                            <?php echo $r["name"];
                            ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 col-lg-4 mt-3">
                <select class="form-select" id="grade" style="background-color: #06d6a0; font-weight: bold;"
                    onchange="loadname();">
                    <?php
                    $e = $_SESSION["e"];
                    $t = $c->query("SELECT DISTINCT (grade) FROM `student`");
                    for ($i = 0; $i < $t->num_rows; $i++) {
                        $r = $t->fetch_assoc();
                        ?>
                        <option>
                            <?php echo $r["grade"];
                            ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 col-lg-4 mt-3">
                <select class="form-select" id="option" style="background-color: #06d6a0; font-weight:bold;">
                </select>
            </div>
            <hr class="m-1">
            <div class="col-12 col-lg-6 mt-3">
                <div class="row justify-content-center">
                    <div class="col-12 border m-2 overflow-auto rounded"
                        style="height: 300px; background-color: #fcbf49;" id="massagediv">
                    </div>
                    <input class="col-12 col-lg-12 rounded m-2" type="text" id="massege">
                    <button class="btn btn-primary col-12 col-lg-12 m-2" onclick="massage();">Send</button>
                </div>
            </div>

            <!-- TimeTable Add -->
            <div class="col-12 col-lg-6 mt-3">
                <div class="row">
                    <h3 class="col-12 mt-1 tabletext">Add The TimeTables</h3>
                    <hr class="col-12">
                    <div class="input-group mb-3 col-12">
                        <label class="input-group-text" for="inputGroupFile01"
                            style="background-color: #118ab2;">Select</label>
                        <input type="file" class="form-control " accept=".png , .jpg" id="inputGroupFile01"
                            style="background-color:#118ab2 ;">
                    </div>
                    <div class="input-group flex-nowrap col-12">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #118ab2;">@</span>
                        <input class="form-control font-weight-bold" id="inputvalue" type="text"
                            aria-label="Disabled input example" disabled readonly style="background-color: #118ab2;">
                    </div>
                    <div class="col-12 border  overflow-auto rounded" style="height: 150px; background-color: #fcbf49;"
                        id="massagediv">
                        <p id="massageP" style="font-weight: bold; font-family: 'Times New Roman', Times, serif;"></p>
                    </div>
                    <input class="col-12 col-lg-12 rounded " type="text" id="tabllemassage">
                    <div class="col-12">
                        <button class="btn btn-primary col-12 col-lg-12 m-2" onclick="tableupload();">Upload</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 m-0">
                <div class="row">
                    <h2 class="col-12 mt-1  tabletext font-weight-bold">Student Register</h2>
                    <p id="studentregister"></p>
                    <hr>
                    <h4 class="text-center mt-lg-2">Student ID Here</h4>
                    <input class="rounded col-12 col-lg-10 offset-lg-1" type="text" id="registerstudentid">
                    <h4 class="text-center mt-3 mt-lg-4">Student Name</h4>
                    <input class="rounded col-12 col-lg-10 offset-lg-1" type="text" id="registerstudentname">
                    <button onclick="newstudentregister();"
                        class="btn btn-primary rounded col-12 col-lg-10 mt-4 offset-lg-1 ">Register</button>
                </div>
            </div>
            <!-- <hr style="width: 1px; height: 100%; border: 0;"> -->

            <div class="col-12 col-lg-6 m-0">
                <div class="row">
                    <h2 class="col-12 mt-1 tabletext font-weight-bold  ">Student Grade Update</h2>
                    <p id="studentregister"></p>
                    <hr>
                    <h4 class="text-center">Select New Grade</h4>
                    <select class="form-select" id="grade2" style="background-color: #06d6a0; font-weight: bold;">
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>

                    <h4 class="mt-2">Select Existing Grade</h4>
                    <select class="form-select" id="existingrade" style="background-color: #06d6a0; font-weight: bold;">
                        <?php
                        $e = $_SESSION["e"];
                        $t = $c->query("SELECT DISTINCT (grade) FROM `student`");
                        for ($i = 0; $i < $t->num_rows; $i++) {
                            $r = $t->fetch_assoc();
                            ?>
                            <option>
                                <?php echo $r["grade"];
                                ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <h4 class="text-center mt-3">Select City</h4>
                    <select class="form-select" id="city2" style="background-color: #06d6a0; font-weight: bold;">
                        <?php
                        $e = $_SESSION["e"];
                        $t = $c->query("SELECT `name` FROM `city`");
                        for ($i = 0; $i < $t->num_rows; $i++) {
                            $r = $t->fetch_assoc();
                            ?>
                            <option>
                                <?php echo $r["name"];
                                ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <button onclick="studentgradeUpdate();"
                        class="btn btn-primary rounded col-12 col-lg-10 mt-4 offset-lg-1 ">Register</button>
                </div>
            </div>
        </div>
    </div>

    <script src="admin.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>