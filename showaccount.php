<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця account</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM account';


    if($result = $mysqli->query($sql)) {  

        printf("Список аккаунтов: <br><br>");   
        printf("<table><tr><th>ІД</th><th>image</th><th>name</th><th>url</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['image'],$row['name'],$row['url']); 
        };
        printf("</table>");
        
        $result->close();
    };

    
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
	<li><a href="deleteFromaccount.php">Видалити рядок</a><br></li>
	<li><a href="insertIntoaccount.php">Вставити рядок</a><br></li>
	 <li><a href="updateaccount.php">Змінити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
