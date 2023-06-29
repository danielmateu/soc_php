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
    <title>Entidades Relacionadas - Tests Relación N a N</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Entidades Relacionadas - Tests Relación N a N</h1>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>
        <!-- Recuperar todos los libros -->
        <section class="mb-5" id="">
            <h2>Recuperamos todos los temas de un libro</h2>

            <?php
            // Recuperamos el libro 3
            $libro = Libro::getById(10);
            echo "<p>Libro recuperado: $libro</p>";

            // Recuperamos los temas del libro 3
            $temas = $libro->getTemas();
            // echo "<p>Temas del libro 3: $temas</p>";
            // Mostramos los temas

            echo "<ul>";
            foreach ($temas as $tema) {
                echo "<li>$tema</li>";
            }
            echo "</ul>";


            ?>
        </section>

        <!-- Recuperar libros de los temas -->

        <section class="mb-5">
            <h2>Recuperamos todos los libros de un tema</h2>

            <?php
            // Recuperamos el tema 5
            $tema = Tema::find(5);
            echo "<p>Tema recuperado: $tema</p>";

            // Recuperamos los libros del tema 5
            $libros = $tema->getLibros();
            // echo "<p>Libros del tema 5: $libros</p>";
            // Mostramos los libros

            echo "<ul>";
            foreach ($libros as $libro) {
                echo "<li>$libro</li>";
            }
            echo "</ul>";

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