<?php

$cname = $_POST["name"];
$grade = $_POST["grade"];

include "../../connection.php";
$cid = $c->query("SELECT `id` FROM `city` WHERE `name` ='$cname'");
$assocc = $cid->fetch_assoc();
$city = $assocc["id"];

$data = $c->query("SELECT * FROM `student` WHERE `grade` ='$grade' AND `city_id`='$city'");


for ($a = 0; $a  < $data->num_rows; $a++) {
    $fname = $data->fetch_assoc();

?>
    <option> <?php echo ($fname['first_name']." ".$fname['last_name']);?> </option>
<?php
}
?>

