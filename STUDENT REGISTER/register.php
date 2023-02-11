<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STUDENT Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">


                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account !</h1>

                            </div>
                            <div class="text-center">
                                <h6 class="ErrorMassage" id="errormassage">Start Your Great Change From Here</h6>
                            </div>
                            <style>
                                .ErrorMassage{
                                    color: gold;
                                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                }
                                .ErrorMassage2{
                                    color: red;
                                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                }
                                .ErrorMassage3{
                                    color: gold;
                                    font-weight: bolder;
                                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                }
                            </style>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="First Name" id="fname">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" placeholder="Last Name" id="lname">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="mobile Number" id="mobile">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Email" id="email">
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <select class="form-select form-control-user col-12 h-100  rounded" id="city">

                                        <?php
                                        include "../connection.php";
                                        $t = $c->query("SELECT `name` FROM `city`");

                                        for ($i = 0; $i < $t->num_rows; $i++) {

                                            $r = $t->fetch_assoc();

                                        ?>
                                            <option>
                                                <?php echo $r["name"]; ?>
                                            </option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control-user col-12 " placeholder="grade" id="grade">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" placeholder="Password" id="password">
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" placeholder="Your ID" id="studentid">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" onclick="submit();">Register</button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="#">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="register.js"></script>


</body>

</html>