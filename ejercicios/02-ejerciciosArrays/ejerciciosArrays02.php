<?php
include_once("../../helpers/helpers.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Arrays 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container position-relative">
    <header class=" header p-4 my-4 rounded d-flex">
        <h1>Ejercicios Arrays 02</h1>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 mt-1 me-3">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>
    </header>

    <section id="paresdel0Al100">
        <h2>Pares del 0 al 100</h2>
        <p>Escribe un programa que imprima los números pares del 0 al 100.</p>

        <div class="alert alert-success">
            <h3>Resultado:</h3>
            <p>
                <?php
                pares()
                ?>
            </p>

        </div>
    </section>

    <section id="multiplosDe50">
        <h2>Multiplos de 50 del 1000 al 0</h2>

        <p>Escribe un programa que imprima los múltiplos de 50 del 1000 al 0.</p>

        <div class="alert alert-success">
            <h3>Resultado:</h3>
            <p>
                <?php
                multiplosDe50()
                ?>
            </p>
    </section>

    <section id="tablaDel5">
        <h2>Tabla del 5</h2>

        <p>Escribe un programa que muestre la tabla de multiplicar del 5
            usando un bucle.</p>

        <div class="alert alert-success">
            <h3>Resultado:</h3>
            <p>
                <?php
                tablaDel5()
                ?>
            </p>

        </div>
    </section>

    <section id="tablas">
        <h2>Tablas de multiplicar del 1 al 9</h2>
        <p>Escribe un programa que muestre las tablas de multiplicar del 1 al
            9.</p>

        <div class="alert alert-success">

            <h3>Resultado:</h3>
            <p>
                <?php
                tablasDel1al9()
                ?>
            </p>
        </div>
    </section>

    <section id="tablaMultiplicar">
        <h2>Tabla de multiplicar</h2>

        <p>Escribe un programa que muestre la tabla de multiplicar de un
            número introducido por la URL (parámetro POST).</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numeroTabla">Número</label>
            <input type="number" name="numeroTabla" id="numeroTabla" value="0">
            <input type="submit" value="Enviar" class="btn btn-primary mt-2">
        </form>

        <?php
        if (isset($_POST["numeroTabla"])) {
            $numeroTabla = $_POST["numeroTabla"];
            // $tabla = [];
            // for ($i = 0; $i <= 10; $i++) {
            //     $tabla[] = $i * $numeroTabla;
            // }
            tablaMultiplicar($numeroTabla);

            // echo implode(', ', $tabla);

            // echo "<div class='alert alert-success mt-2'>
            // <h3>Resultado:</h3>
            // <p>Tabla del $numeroTabla => " . implode(', ', $tabla) . "</p>
            // </div>";
        }
        ?>


    </section>

    <section id="esPar">
        <h2>Es Par?</h2>

        <p>Escribe un programa que, dado un número, nos diga si es par o
            impar.</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numeroEsPar">Número</label>
            <input type="number" name="numeroEsPar" id="numeroEsPar" value="0">
            <input type="submit" value="Calcular" class="btn btn-primary mt-2">
        </form>

        <?php
        if (isset($_POST["numeroEsPar"])) {
            $numeroEsPar = $_POST["numeroEsPar"];
            // if ($numero % 2 == 0) {
            //     echo "<p>El número $numero es par</p>";
            // } else {
            //     echo "<p>El número $numero es impar</p>";
            // }

            // Operador ternario
            echo "<div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>El número $numeroEsPar es " . ($numeroEsPar % 2 == 0 ? "par" : "impar") . "</p>
            </div>";
        }
        ?>

    </section>

    <section id="esNegativo">
        <h2>Es negativo?</h2>

        <p>Escribe un programa que dado un número, nos diga si es positivo, negativo o 0</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numeroEsNegativo">Número</label>
            <input type="number" name="numeroEsNegativo" id="numeroEsNegativo" value="0">
            <input type="submit" value="Calcular" class="btn btn-primary mt-2">
        </form>

        <?php
        if (isset($_POST["numeroEsNegativo"])) {
            $numeroEsNegativo = $_POST["numeroEsNegativo"];

            echo "<div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>El número $numeroEsNegativo es " . ($numeroEsNegativo < 0 ? "negativo" : ($numeroEsNegativo > 0 ? "positivo" : "0")) . "</p>
            </div>";
        }
        ?>
    </section>

    <section id="letraDni">

        <h2>Letra del DNI</h2>

        <p>Escribe un programa que determine la letra del DNI en función del
            número.</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numeroDni">Número</label>
            <input type="number" name="numeroDni" id="numeroDni" value="0">
            <input type="submit" value="Calcular" class="btn btn-primary mt-2">
        </form>

        <?php
        if (isset($_POST["numeroDni"])) {
            $numeroDni = $_POST["numeroDni"];
            $letras = array(
                "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D",
                "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L",
                "C", "K", "E"
            );
            $resto = $numeroDni % 23;

            echo "<div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>La letra del DNI $numeroDni es $letras[$resto]</p>
            </div>";

            return $letras[$resto];
        }
        ?>

    </section>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>

</body>

</html>