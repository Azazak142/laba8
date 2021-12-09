<?php

include_once('db.php');



$id = $_POST['id'];
$account_id = $_POST['account_id'];
$chat_id = $_POST['chat_id'];
$txt = $_POST['txt'];

$sql = "UPDATE students SET account_id='$account_id', chat_id='$chat_id', txt='$txt' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
