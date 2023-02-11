<?php

$email = $_POST["email"];
$password = $_POST["password"];

include "../connection.php";
$t = $c->query("SELECT * FROM `admin` WHERE `email` ='$email' AND `password` ='$password'");

if ($t->num_rows == 0) {
    header("location:adminlogin.php");
    echo ("<script>alert('Try Again')</script>");
} else {
    session_start();
    $_SESSION["email"] = $email;
    header("location:./ADMIN PAGE/Adminpage.php");
}

?>

<?php echo ($dfa["first_name"]); ?>


<div class="col-12 col-lg-4 mt-3">
    <select class="form-select">
        <?php include 'nameselect.php' ?>
    </select>

</div>