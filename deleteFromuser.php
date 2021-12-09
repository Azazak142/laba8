<?php

include_once('db.php');

$id = $_POST['id'];


$sql = "DELETE FROM user WHERE id='$id'";


if ($mysqli->query($sql))
    {
        echo "Рядок видалено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showuser.php");
?>
