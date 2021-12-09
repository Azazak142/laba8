<?php

include_once('db.php');


$account_id = $_POST['account_id'];
$chat_id = $_POST['chat_id'];
$txt = $_POST['txt'];

$sql = "INSERT INTO students (account_id, chat_id, txt) VALUES ('$account_id', '$chat_id', '$txt' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
