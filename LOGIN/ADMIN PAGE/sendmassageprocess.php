<?php

$toname = $_POST["toname"];
$massage = $_POST["massage"];
$date = date("Y-m-d");
$splitName = explode(" ",$toname);
$fname = $splitName[0];
$lname = $splitName[1];

if(empty($massage)){
echo("Please Enter The Massege");
exit();
}else{

    include "../../connection.php";
$idselect = $c->query("SELECT `student_id` FROM `student` WHERE `first_name` ='$fname' AND `last_name` ='$lname'");
$stdid = $idselect->fetch_assoc();
$studentid = $stdid["student_id"];
$c->query("INSERT INTO `massage`(`massage`,`date`,`to_id`) VALUES ('$massage','$date','$studentid')");
echo("Success");
}
?>