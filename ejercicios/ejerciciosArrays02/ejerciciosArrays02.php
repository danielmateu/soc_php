<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Arrays 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container position-relative">
    <header class=" header p-4 my-4 rounded">
        <h1>Ejercicios Arrays 02</h1>
    </header>

    <section id="paresdel0Al100">
        <h2>Pares del 0 al 100</h2>
        <p>Escribe un programa que imprima los números pares del 0 al 100.</p>

        <div class="alert alert-success">
            <h3>Resultado:</h3>
            <p>
                <?php
                $pares = [];
                for ($i = 0; $i <= 100; $i++) {
                    if ($i % 2 == 0) {
                        $pares[] = $i;
                    }
                }
                echo implode(', ', $pares);
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
                $multiplos = [];
                for ($i = 1000; $i >= 0; $i--) {
                    if ($i % 50 == 0) {
                        $multiplos[] = $i;
                    }
                }
                echo implode(', ', $multiplos);
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
                $tabla = [];
                for ($i = 0; $i <= 10; $i++) {
                    $tabla[] = $i * 5;
                }
                echo implode(', ', $tabla);
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
                $tablas = [];
                for ($i = 1; $i <= 9; $i++) {
                    $tabla = [];
                    for ($j = 0; $j <= 10; $j++) {
                        $tabla[] = $i * $j;
                    }
                    $tablas[] = implode(', ', $tabla);
                }
                echo implode('<br> ', $tablas);
                // impriendo con un foreach tabla del x y la tabla
                // foreach ($tablas as $key => $tabla) {
                //     echo "Tabla del " . ($key + 1) . ": " . $tabla . "<br>";
                // }
                ?>
            </p>
        </div>
    </section>

    <section id="esPar">
        <h2>Es Par?</h2>

        <p>Escribe un programa que, dado un número, nos diga si es par o
            impar.</p>

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
            echo "<div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>El número $numero es " . ($numero % 2 == 0 ? "par" : "impar") . "</p>
            </div>";
        }
        ?>

    </section>

    <section id="esNegativo">
        <h2>Es negativo?</h2>

        <p>Escribe un programa que dado un número, nos diga si es positivo, negativo o 0</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="0">
            <input type="submit" value="Calcular" class="btn btn-primary mt-2">
        </form>

        <?php
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];

            echo "<div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>El número $numero es " . ($numero < 0 ? "negativo" : ($numero > 0 ? "positivo" : "0")) . "</p>
            </div>";
        }

        ?>
    </section>

    <section id="letraDni">

        <h2>Letra del DNI</h2>

        <p>Escribe un programa que determine la letra del DNI en función del
            número.</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="0">
            <input type="submit" value="Calcular" class="btn btn-primary mt-2">
        </form>

        <?php
        // Solucion con arrays
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            $letras = array(
                "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D",
                "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L",
                "C", "K", "E"
            );
            $resto = $numero % 23;
            echo "<div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>La letra del DNI $numero es $letras[$resto]</p>
            </div>";
        }
        ?>

    </section>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="./index.js"></script>

</body>

</html>