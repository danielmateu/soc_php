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
    <title>Entidades Relacionadas - Recuperación desde vistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Entidades Relacionadas - Recuperación desde vistas</h1>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>
        <!-- Recuperar todos los libros -->
        <section class="mb-5" id="">
            <h2>Recuperamos más información</h2>

            <p>
                Al recuperar la información de un préstamo,
                tan solo estamos recuperando información de la tabla prestamos
                (ni datos del socio, ni del ejemplar, ni del libro).
                <br>
                Sería interesante, por ejemplo, que si recuperamos los préstamos de
                un Socio, se nos recupere también información adicional del Ejemplar y
                el título del Libro.
            </p>

            <p>
                Para un listado de préstamos que contenga información del
                Ejemplar o del Libro, evitando crear una consulta SQL compleja
                desde PHP o múltiples consultas, podemos usar el mecanismo de
                vistas en la BDD.

                <br>

                Crearemos una vista en la base de datos cruzando las tablas (JOIN)
                de forma que recuperemos toda la información que deseamos.
            </p>

            <p>Ejemplo: Recuperar la información ampliada de los prestamos del socio 5</p>

            <?php
            $prestamosAmpliados = Socio::getById(5)->hasMany('V_prestamo');

            foreach ($prestamosAmpliados as $prestamo) {
                echo "<li>$prestamo</li>";
            }
            ?>

            <hr>

            <h2>
                Recuperando todos los prestamos ampliados
            </h2>

            <?php
            $prestamosAmpliados = V_prestamo::all();

            foreach ($prestamosAmpliados as $prestamo) {
                echo "<li>$prestamo</li>";
            }
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