<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Grados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container">

    <header class="d-flex flex-col justify-content-center  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class=" ">Conversor de Fahrenheit a Celisus</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around">
            <!-- <a href="#if">if</a>
            <a href="#ifelse">if-else</a>
            <a href="#switch">switch</a>
            <a href="#operadorTernario">operador ternario</a>
            <a href="#operadorNull">operador ??</a> -->
        </nav>
        <!-- Boton para cambio de modo -->

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>


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
        <input type="number" name="fahrenheit" id="fahrenheit" placeholder="Introduce los grados Fahrenheit"
        
        >

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

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor

    </footer>

    <script src="./index.js"></script>
</body>

</html>