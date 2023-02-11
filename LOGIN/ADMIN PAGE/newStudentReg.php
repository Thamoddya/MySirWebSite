<?php

$studentID = $_POST["sid"];
$firstName = $_POST["fn"];
$lastName = $_POST["ln"];
$mobile = $_POST["mob"];
$email = $_POST["ema"];
$password = $_POST["pw"];
$grade = $_POST["grd"];
$city = $_POST["cty"];


require "../../connection.php";

if (empty($studentID && $grade)) {
    echo ("Fill The ALL Details");
} else {
    if (empty($firstName)) {
        echo "Fill The First Name";
    } else {
        if (empty($lastName)) {
            echo "Fill The Last Name";
        } else {
            if (empty($mobile)) {
                echo "Fill The Mobile Number";
            } else {
                $numberCheckPattern = "/^07[01245678]{1}[0-9]{7}$/";
                $resalt = preg_match($numberCheckPattern, $mobile);
                if ($resalt) {
                    $checkStudentIdInTable = $c->query("SELECT * FROM student WHERE student_id = '$studentID'");
                    $fetchDataInStudentTable = $checkStudentIdInTable->fetch_assoc();
                    if ($checkStudentIdInTable->num_rows == 1) {
                        echo "Student Id Already Exists for - " . $fetchDataInStudentTable['first_name'] . " ";
                    } else {
                        if (empty($email)) {
                            echo "Fill The Email";
                        } else {
                            $getCityFromTable = $c->query("SELECT id FROM city WHERE `name` = '$city'");
                            $FetchCityData = $getCityFromTable->fetch_assoc();
                            $cityID  = $FetchCityData['id'];
                            $c->query("INSERT INTO `student`(`student_id`,`first_name`,`last_name`,`mobile`,`password`,`email`,`grade`,`city_id`) VALUES ('$studentID','$firstName','$lastName','$mobile','$password','$email','$grade','$cityID')");
                            echo "Student Registed Successfully";
                        }
                    }
                } else {
                    echo "Please Enter a Valid Mobile Number";
                }
            }
        }
    }
}

?>