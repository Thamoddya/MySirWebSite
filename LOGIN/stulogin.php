<?php
session_start();
$e = $_POST["id"];
$p = $_POST["password"];

// include "../connection.php";
require "../connection.php";
$t = $c->query("SELECT * FROM `student` WHERE `student_id` ='$e' AND `password` ='$p'");

if ($t->num_rows == 1) {
    $_SESSION["studentid"]=$e;
    echo "success";
}
else{
    echo "Error Details";
}
?>