<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Km a Millas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Conversor Km a Millas</h1>

    <p>Escribe un programa que convierta de kilómetros a millas.</p>

    <p>La fórmula para convertir los kilómetros a millas es la
        siguiente:</p>

    <p>M = K * 0.621371</p>

    <p>donde K es la distancia en kilómetros y M es la distancia
        en millas. </p>

    <form action="conversorKmaMillas.php" method="get" class="d-flex flex-column col-5">
        <label for="km">Kilómetros</label>
        <input type="number" name="km" id="km" step="0.01" value="0">
        <input type="submit" value="Convertir" class="btn btn-primary mt-2">
    </form>

    <?php
    if (isset($_GET["km"])) {
        $km = $_GET["km"];
        $millas = $km * 0.621371;
        echo "<p>$km km son $millas millas</p>";
    } else {
        echo "<p>Introduce los kilómetros</p>";
    }

    ?>
</body>

</html>