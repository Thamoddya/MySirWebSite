<?php
$email = $_POST["email"];
session_start();
$name = $_SESSION["studentid"];


include "../../connection.php";
if (empty($email)) {
    echo "Type Email";
} else {

    

    if (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
        $c->query("UPDATE `student` SET `email` = '$email' WHERE `student_id`= '$name';");
        echo ("Email Update Success");
    } else {
        echo "Enter a valid email address";
    }
}
?>