<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container justify-content-center align-items-center vh-100 d-flex flex-column">
    <h1>Ejercicio 03 - Generar HTML</h1>

    <?php
    // genera cinco elementos en una lista desordenada  
    for ($i = 1; $i <= 5; $i++) {
        echo "<ul>";
        echo "<li>$i elefante se balanceaba</li>";
        echo "</ul>";
    }
    ?>
</body>

</html>