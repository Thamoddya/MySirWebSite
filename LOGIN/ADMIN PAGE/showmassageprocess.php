<?php
$toname = $_POST["toname"];
$date = date("Y-m-d");
if(empty($toname)){
    echo("Please select a Student");
    exit();
}else{
    $splitName = explode(" ", $toname);
    $fname = $splitName[0];
    $lname = $splitName[1];
}
include "../../connection.php";
$idselect = $c->query("SELECT `student_id` FROM `student` WHERE `first_name` ='$fname' AND `last_name` ='$lname'");
$stdid = $idselect->fetch_assoc();
$studentid = $stdid["student_id"];
$chattable = $c->query("SELECT * FROM `massage` WHERE `to_id` = '$studentid'");

if (empty($chattable->num_rows)) {
    echo ("No previous messages");
} else {
    for ($x = 0; $x < $chattable->num_rows; $x++) {
        $chat =  $chattable->fetch_assoc();
?>

        <p class=" mt-2" style="font-weight: bold; font-size: 20px;"><?php echo ($chat["massage"]); ?><br><sub style="font-size: 10px;"><?php echo ($chat["date"]); ?></sub></p>
<?php
    }
}
?>