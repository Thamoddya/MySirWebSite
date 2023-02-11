<?php
$studentid = $_POST["studentid"];
$name = $_POST["name"];

include "../../connection.php";

$testIdInTable = $c->query("SELECT `student_id` FROM `student_id` WHERE `student_id`= '$studentid';");
// $testDatafromIdTable = $testIdInTable->fetch_assoc();

if ($testIdInTable->num_rows==1) {
    echo ("Already Exists");
} else {
    $c->query("INSERT INTO `student_id`(`student_id`,`full_name`) VALUES ('$studentid','$name')");
    echo("Successfully Added");
}

?>