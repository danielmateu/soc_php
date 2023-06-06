<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Grados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="container">
    <h1>Conversor de Fahrenheit a Celisus</h1>

    <p>Escribe un programa que convierta de grados Fahrenheit a grados
        Celsius.</p>

    <p>La fórmula para convertir los grados Fahrenheit a Celsius es la
        siguiente:</p>

    <p>C = (5/9) * (F - 32)</p>

    <p>donde F es la temperatura en grados Fahrenheit y C es la temperatura
        en grados Celsius. </p>

    <p>Por ejemplo, 104 grados Fahrenheit es igual a 40 grados Celsius.</p>

    <form action="" method="post" class="d-flex flex-column col-5">
        <label for="fahrenheit">Fahrenheit</label>
        <input type="number" name="fahrenheit" id="fahrenheit" placeholder="Introduce los grados Fahrenheit">

        <input type="submit" value="calcular" class="btn btn-primary mt-2" name="calcular">

    </form>

    <?php

    if (isset($_POST["calcular"])) {

        $fahrenheit = $_POST["fahrenheit"];

        $celsius = (5 / 9) * ($fahrenheit - 32);

        echo "<p>$fahrenheit grados Fahrenheit son $celsius grados Celsius</p>";
    } else {
        echo "<p>Introduce los grados Fahrenheit</p>";
    }
    ?>


</body>

</html>