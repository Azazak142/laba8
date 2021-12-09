<?php

include_once('db.php');


$account_id = $_POST['account_id'];
$device = $_POST['device'];


$sql = "INSERT INTO students (account_id, device) VALUES ('$account_id', '$device' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
