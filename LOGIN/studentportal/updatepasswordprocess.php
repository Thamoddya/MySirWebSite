<?php
$password = $_POST["password"];
session_start();
$name = $_SESSION["studentid"];


include "../../connection.php";
if (empty($password)) {
    echo "Type Password";
}else{
    

    if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}$/", $password)) {
        $c->query("UPDATE `student` SET `password` = '$password' WHERE `student_id`= '$name';");
        echo("Passord Update Success");
    } else {
        echo "Password is invalid.Please read the guidelines first";
    }
}
?>