<?php

include_once('db.php');



$id = $_POST['id'];
$account_id = $_POST['account_id'];
$format = $_POST['format'];
$height = $_POST['height'];
$width = $_POST['width'];

$sql = "UPDATE students SET account_id='$account_id', format='$format', height='$height', width='$width' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
