<?php

include_once('db.php');


$account_id = $_POST['account_id'];
$format = $_POST['format'];
$height = $_POST['height'];
$width = $_POST['width'];

$sql = "INSERT INTO students (account_id, format, height, width) VALUES ('$account_id', '$format', '$height', '$width' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
