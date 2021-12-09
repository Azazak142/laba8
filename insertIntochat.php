<?php

include_once('db.php');


$setting = $_POST['setting'];
$url = $_POST['url'];

$sql = "INSERT INTO students (setting, url) VALUES ('$setting', '$url' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
