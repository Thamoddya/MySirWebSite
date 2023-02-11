<?php

$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$city = $_POST["cityName"];
$password = $_POST["password"];
$id = $_POST["studentId"];
$grade = $_POST["grade"];

include "../connection.php";

$firstidheck = $c->query("SELECT `student_id` FROM `student` WHERE `student_id` = '$id'");
$firstidheckgotdata = $firstidheck->fetch_assoc();

if (empty($id)) {
    echo "Please Enter Student Id";
} elseif (empty($firstname)) {
    echo "Please Enter First Name";
} elseif (empty($lastname)) {
    echo "Please Enter Last Name";
} elseif (empty($mobile)) {
    echo "Please Enter Mobile Number";
} elseif (empty($password)) {
    echo "Please Enter Password";
} elseif (empty($grade)) {
    echo "Please Enter Grade";
} elseif ($firstidheck->num_rows == 1) {
    echo "Student Already Exists";
} else {
    $numbercheck = preg_match("/^07[01245678]{1}[0-9]{7}$/", $mobile);
    if ($numbercheck) {

        $idget = $c->query("SELECT `id` FROM `city` WHERE `NAME`='$city'");
        $idarray = $idget->fetch_assoc();
        $cityid = $idarray["id"];


        $idtest = $c->query("SELECT `student_id` FROM `student_id` WHERE `student_id` = '$id'");


        if ($idtest->num_rows == 1) {

            $testdata = $idtest->fetch_assoc();
            $outputdatatest = $testdata["student_id"];
            if($outputdatatest==$id){
                $c->query("INSERT INTO `student`(student_id,first_name,last_name,mobile,password,email,grade,city_id) VALUES ('$id','$firstname','$lastname','$mobile','$password','$email','$grade','$cityid')");
                echo ("success");
            }else{
                echo ("Invalid Student ID,Please Contact The Administrator");
            }
            
        } else {
            echo "Invalid Student ID";
        }
    } else {
        echo "Please Enter Valid Mobile Number";
    }
}
