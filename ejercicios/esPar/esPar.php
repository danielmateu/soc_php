<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es Par</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../styles.css"> -->
</head>

<body class="container">
    <h1>Es Par?</h1>

    <p>Escribe un programa que dado un número, nos diga si es par o impar</p>

    <form method="post" class="d-flex flex-column col-5">
        <label for="numero">Número</label>
        <input type="number" name="numero" id="numero" value="0">
        <input type="submit" value="Calcular" class="btn btn-primary mt-2">
    </form>

    <?php
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        // if ($numero % 2 == 0) {
        //     echo "<p>El número $numero es par</p>";
        // } else {
        //     echo "<p>El número $numero es impar</p>";
        // }

        // Operador ternario
        echo "<p>El número $numero es " . ($numero % 2 == 0 ? "par" : "impar") . "</p>";
    }
    ?>
</body>

</html>