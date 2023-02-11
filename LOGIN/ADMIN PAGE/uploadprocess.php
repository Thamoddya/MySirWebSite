<?php
$cname = $_POST["name"];
$details = $_POST["massage"];
$grade = $_POST["grade"];

session_start();
include "../../connection.php";

if(empty($details)){
    echo "Enter The Details";
}else{
    $img = $_FILES["file"];
$file_name = "upload/".uniqid().".png";
move_uploaded_file($img["tmp_name"], $file_name);
$c->query ("INSERT INTO timetable(city,path,grade,massage)VALUES ('$cname','$file_name','$grade','$details')");
echo"Done";
}
?>