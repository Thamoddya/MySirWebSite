<?php
$cityName = $_POST["city"];
$grade = $_POST["grade"];
$exgrade = $_POST["exgrade"];
include "../../connection.php";


if (empty($cityName)) {
    echo ("Please select city name");
} else {

    if(empty($grade)){
        echo ("Please select Grade");
    }else{
        $getCityIdFromTable = $c->query("SELECT * FROM `city` WHERE `name` = '$cityName'");
        $getIDFromTable = $getCityIdFromTable->fetch_assoc();
        $cityId = $getIDFromTable["id"];
        
        $c->query("UPDATE `student` SET `grade` = '$grade' WHERE `grade` = '$exgrade' AND `city_id` = '$cityId'");
        echo("Successfully updated");

    }
    
}


?>