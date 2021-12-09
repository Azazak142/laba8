<?php

include_once('db.php');



$id = $_POST['id'];
$setting = $_POST['setting'];
$url = $_POST['url'];

$sql = "UPDATE students SET setting='$setting', url='$url' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
