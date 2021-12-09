<?php

include_once('db.php');



$id = $_POST['id'];
$account_id = $_POST['account_id'];
$device = $_POST['device'];

$sql = "UPDATE students SET account_id='$account_id', device='$device' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
