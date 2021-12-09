<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця chat_has_account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця chat_has_account</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM chat_has_account";


    if($result = $mysqli->query($sql))
    {     
        printf("<table><tr><th>ІД_account</th><th>chat_id</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['account_id'], $row['chat_id']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
