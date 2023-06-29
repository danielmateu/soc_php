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
    <title>Entidades Relacionadas - Tests Prestamos Ejemplar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Entidades Relacionadas - Tests Prestamos Ejemplar </h1>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>
        <!-- Recuperar todos los prestamos de el socio con id 2 -->
        <section class="mb-5" id="">
            <h2>Recuperamos todos los préstamos de un determinado ejemplar</h2>
            <?php
            // Obtenemos el ejemplar con id 2
            $libro = Libro::getById(2);
            echo "<p>Libro: $libro</p>";

            echo "<hr>";
            // Recuperando los ejemplares del libro
            $ejemplares = $libro->getEjemplares();

            // Mostramos los ejemplares
            echo "<h3>Ejemplares del libro:</h3>";
            foreach ($ejemplares as $ejemplar) {
                echo "<p>$ejemplar</p>";
            }

            echo "<hr>";

            // Recuperando los préstamos del primer ejemplar
            $prestamos = $ejemplares[0]->getPrestamos();

            // Mostramos los préstamos
            echo "<h3>Préstamos del primer ejemplar:</h3>";
            foreach ($prestamos as $prestamo) {
                echo "<p>$prestamo</p>";
            }

            echo "<hr>";


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