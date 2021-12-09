<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця chat</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM chat";


    if($result = $mysqli->query($sql))
    {     
        printf("<table><tr><th>ІД</th><th>setting</th><th>url</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['setting'], $row['url']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
	<li><a href="deleteFromchat.php">Видалити рядок</a><br></li>
	<li><a href="insertIntochat.php">Вставити рядок</a><br></li>
	 <li><a href="updatechat.php">Змінити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
