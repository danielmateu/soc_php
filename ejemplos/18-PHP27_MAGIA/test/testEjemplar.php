<?php
include '../config/config.php';
include '../libraries/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos - Tests en modelo Ejemplar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Base de datos - Tests en modelo Ejemplar</h1>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>
        <!-- Recuperar todos los libros -->
        <section class="mb-5" id="">
            <h2>Recuperamos todos los ejemplares</h2>

            <?php
            $ejemplares = Ejemplar::all();

            echo "<p>Hay " . count($ejemplares) . " ejemplares</p>";

            foreach ($ejemplares as $ejemplar) {
                echo "<div class='flex justify-between mb-2'>$ejemplar</div>";
            }


            ?>
        </section>

        <!-- Recuperar un libro que existe -->
        <section class="mb-5" id="">
            <h3>Recuperando el libro con el id 3...</h3>
            <?php
            // $libro = Libro::getById(10);

            // echo $libro ? "<p>$libro</p>" : "<p class='alert alert-danger'>El libro no existe</p>";
            ?>
        </section>

        <!-- Guardar un libro -->
        <section class="mb-5">
            <h3>Guardar un ejemplar nuevo</h3>
            <?php
            // $libro = new Libro();
            // $libro->isdn = "978-84-450-0001-00";
            // $libro->titulo = "El señor de los gramillos";
            // $libro->autor = "J.R.R. Zorrien";
            // $libro->editorial = "Minotauro";
            // $libro->idioma = "Castellano";
            // $libro->ediciones = 1;
            // $libro->edadRecomendada = 18;
            // $libro->portada = "";;

            // $libro->save();

            // echo "<p>$libro</p>";
            ?>
        </section>

        <!-- Actualizar Libro -->
        <section class="mb-5">
            <h3>Actualizar un ejemplar con id 59</h3>
            <?php
            // $libro = Libro::getById(1);
            // echo "<p>$libro</p>";

            // // Cambiamos algunos datos
            // $libro->titulo = "El señor de los putillos";
            // $libro->autor = "J.R.R. Bolkien";

            // $numeroDeFilasActualizadas = $libro->update();
            // echo "<p>Se han actualizado $numeroDeFilasActualizadas filas</p>";

            // $libro = Libro::getById(1);
            // echo "<p>$libro</p>";
            ?>
        </section>

        <!-- Borrar un libro -->
        <section class="mb-5">
            <h3>Borrar un ejemplar</h3>
            <?php

            // $filasAfectadas = Libro::delete(58);
            // echo $filasAfectadas ? "<p>Se han borrado $filasAfectadas filas</p>" : "<p class='alert alert-danger'>El libro no existe</p>";

            ?>
        </section>

        <!-- Calculo de totales -->
        <section class="mb-5">
            <?php

            ?>
        </section>
    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../../index.js"></script>
</body>

</html>