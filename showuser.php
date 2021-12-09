<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця user</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM user";


    if($result = $mysqli->query($sql))
    {   
       
        printf("<table><tr><th>ІД_account</th><th>device</th><th>id</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['account_id'], $row['device'], $row['id']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
	<li><a href="deleteFromuser.php">Видалити рядок</a><br></li>
	<li><a href="insertIntouser.php">Вставити рядок</a><br></li>
	 <li><a href="updateuser.php">Змінити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
