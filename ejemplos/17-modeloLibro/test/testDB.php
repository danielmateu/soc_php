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
    <title>Base de datos - Clase DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Base de datos - Clase DB</h1>
        <!-- <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </nav> -->
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>

        <!-- <h2>Lista de libros</h2> -->

        <!-- Mostrando un cliente -->
        <section class="mb-5" id="">
            <?php
            // Pruebas de select() o selectOne()
            echo "<h3>Recuperando el socio 5</h3>";
            echo "<pre>";
            var_dump(DB::select("SELECT * FROM socios WHERE id = 5"));
            echo "</pre>";
            ?>

        </section>

        <!-- Mostrando todos los clientes -->
        <section class="mb-5" id="">
            <?php
            // Pruebas de select() o selectOne()
            echo "<h3>Recuperando todos los socios que vivan en Barcelona</h3>";
            echo "<pre>";
            var_dump(DB::selectAll("SELECT * FROM socios WHERE poblacion = 'Barcelona'"));
            echo "</pre>";
            ?>

        </section>

        <!-- Insert nuevo tema -->
        <section class="mb-5">
            <?php
            // Pruebas de insert()
            // echo "<h3>Insertando un nuevo tema</h3>";

            // $consulta = "INSERT INTO temas (tema, descripcion) VALUES ('viajes', 'Temas relacionados con viajes')";

            // $id = DB::insert($consulta);

            // echo "<p>Se ha insertado el tema con id $id</p>";

            ?>

        </section>

        <!-- Update tema -->
        <section class="mb-5">
            <?php
            // echo "<h3>Actualizando el tema con id 19</h3>";

            // $consulta = "UPDATE temas SET tema = 'Testeo de tema' WHERE id = 19";

            // $filas = DB::update($consulta);

            // echo "<p>Se ha actualizado el tema con id 19</p>";
            ?>
        </section>

        <!-- Delete tema -->
        <section class="mb-5">
            <?php
            echo "<h3>Borrando el tema con id 19</h3>";

            $consulta = "DELETE FROM temas WHERE id = 19";

            $filas = DB::delete($consulta);

            echo "<p>Filas afectadas $filas</p>";

            echo "<p>Se ha borrado el tema con id 19</p>";
            ?>
        </section>

        <!-- Pruebas de Totales -->
        <section class="mb-5">
            <?php
            echo "<h3>Recuperando el total de socios</h3>";

            echo "<p>Total de socios " . DB::total('socios') . "</p>";
            // Precio medio de ejemplares
            echo "<p>Precio medio de ejemplares " . DB::total('ejemplares', 'AVG', 'precio') . " €</p>";

            // echo "<p>Total de socios $total</p>";
            ?>
        </section>


    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>
</body>

</html>