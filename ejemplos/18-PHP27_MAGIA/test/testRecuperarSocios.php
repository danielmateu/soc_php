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
    <title>Base de datos - Tests en modelo Socio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Base de datos - Tests en modelo Socio</h1>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>
        <!-- Recuperar todos los libros -->
        <section class="mb-5" id="">
            <h2>Recuperamos todos los Socios</h2>
            <p>Usamos el método get()</p>

            <?php
            $socios = Socio::get();

            echo "<ul>";
            foreach ($socios as $socio) {
                echo "<li>$socio</li>";
            }
            echo "</ul>";
            ?>
        </section>

        <!-- Recuperar el socio con id 27 -->
        <section class="mb-5">
            <h3>Recuperar socio con id 27</h3>
            <?php
            $socio = Socio::getById(27);

            echo "<p>$socio</p>";
            ?>
        </section>

        <!-- Eliminar socio con id 1 -->
        <section class="mb-5">
            <h3>Eliminar socio con id(27)</h3>

            <?php

            $socio = Socio::delete(27);
            echo "<p>Socio eliminado</p>";

            // echo "<p>$socio</p> " ?? "No existe el socio";
            // Si no existe el socio, devuelve null
            // echo "<p class='alert '>$socio</p> " ?? "No existe el socio";

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