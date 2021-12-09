<?php

include_once('db.php');

$image = $_POST['image'];
$name = $_POST['name'];
$url = $_POST['url'];

$sql = "INSERT INTO students (image, name, url) VALUES ('$image', '$name', '$url' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
