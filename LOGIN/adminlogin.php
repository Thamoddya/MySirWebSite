<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="bg-dark">

    <style>
        .margi {
            margin-top: 20vh;
        }
    </style>


    <div class="container-fluid ">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./studentlogin.php">Student Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Main Page</a>
            </li>
            

        </ul>

        <div class="row">

            <div class="col-12 col-lg-6 offset-lg-3 margi ">
                <form method="POST" action="./alogin.php">
                    <h3 class="text-white">Admin Login</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                            placeholder="Email Here">
                        <div id="emailHelp " class="form-text text-muted">Email Here</div>
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            placeholder="Password Here">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-muted " for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <p id="error_text"></p>

            </div>

        </div>

    </div>

    <script src="./admin.js"></script>
</body>

</html>