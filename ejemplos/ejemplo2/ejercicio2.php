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
    <h1>Ejercicio 02</h1>
    <?php
    // echo "Hello World";
    // Probar en el navegador: http://localhost
    // Probar en el navegador: http://localhost/SOC_PHP/Ejemplos/Ejemplo2/ejercicio2.php?campo=nombre&valor=dani&orden=dni&sentido=DESC

    // recuperar los datos que llegan por GET
    $campo = $_GET['campo'] ?? 'dni';
    $valor = $_GET['valor'] ?? '';
    $orden = $_GET['orden'] ?? 'id';
    $sentido = $_GET['ASC'] ?? 'ASC';
    echo "<br>";

    // Preparar una consulta SQL es más facil con comillas dobles
    // Para anidamiendo de comillas, podemos usar comillas simples
    $consulta = "SELECT * FROM usuarios WHERE $campo LIKE '%$valor%' ORDER BY $orden $sentido";
    echo $consulta;

    
    ?>
</body>

</html>