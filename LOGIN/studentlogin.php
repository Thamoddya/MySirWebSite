<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Login</title>

	<link rel="stylesheet" href="loginpage.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>

</head>

<body class="bg-dark">
	<div class="container-fluid d-flex align-items-center justify-content-center">
		<div class="box">
			<div class="form">
				<h2>Student Login</h2>
				<div class="inputBox">
					<input type="text" id="email">
					<span>Student ID</span>
					<i></i>
				</div>
				<p id="error_text" style="color:crimson;"></p>
				<div class="inputBox">
					<input type="password" id="password">
					<span>Password</span>
					<i></i>
				</div>
				<div class="links">
					<a href="#">Forgot Password ?</a>
					<a href="../STUDENT REGISTER/register.php">Signup</a>
				</div>
				<p id="errormassege" class="text-danger fw-bold"></p>
				<button onclick="signin();" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
	<p style="color: white;"> Admin Login <a href="./adminlogin.php" style="text-decoration: none;">Go Here</a> </p>

	<script src="student.js"></script>
</body>

</html>