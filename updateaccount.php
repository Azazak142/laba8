<?php

include_once('db.php');



$id = $_POST['id'];
$image = $_POST['image'];
$name = $_POST['name'];
$url = $_POST['url'];

$sql = "UPDATE students SET image='$image', name='$name', url='$url' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
