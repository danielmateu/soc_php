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
    <title>Base de datos - Tests en modelo Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Base de datos - Tests en modelo Libro</h1>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>
        <!-- Recuperar todos los libros -->
        <section class="mb-5" id="">
            <?php
            // Pruebas de select() o selectOne()
            echo "<h3>Recuperando todos los libros</h3>";
            $libros = Libro::get();
            // Mostramos una lista de los libros
            echo "<ul>";
            foreach ($libros as $libro) {
                echo "<li>$libro</li>";
            }
            echo "</ul>";

            // echo "<pre>";
            // var_dump(Libro::get());
            // echo "</pre>";
            ?>
        </section>

        <!-- Recuperar un libro que existe -->
        <section class="mb-5" id="">
            <?php
            echo "<h3>Recuperando el libro con el id 3...</h3>";

            $libro = Libro::getById(3);
            echo "<pre>";
            echo $libro;
            echo "</pre>";
            ?>
        </section>

        <!-- Guardar un libro -->
        <section class="mb-5">
            <?php
            // echo "<h3>Guardando un nuevo libro...</h3>";

            // $libro = new Libro();

            // $libro->isdn = '978-84-904-1849-45';
            // $libro->titulo = 'El Quijote';
            // $libro->editorial = 'Anaya';
            // $libro->idioma = 'Español';
            // $libro->autor = 'Miguel de Cervantes';
            // $libro->ediciones = 1;
            // $libro->edadRecomendada = 18;

            // // Guarda el libro y actualiza su ID
            // $libro->save();
            // echo "<p>Libro guardado con el id $libro->id</p>";

            // // Mostrar el libro guardado
            // echo "<p>Mostrando el libro guardado...</p>";
            // echo Libro::getById($libro->id);
            ?>
        </section>

        <!-- Actualizar Libro -->
        <section class="mb-5">
            <?php
            echo "<h3>Actualizando el libro con el id 3...</h3>";

            $libro = Libro::getById(3);
            echo "<p>Libro antes de actualizar:</p>";
            echo $libro;

            // Actualizamos el título
            $libro->titulo = 'Organización de las DDBB';
            $libro->autor = 'Juan Manuel Fernández';

            // Actualizamos en caso de fallo lanzaría una excepcion
            $filasActualizadas = $libro->update();
            echo "<p>Se han actualizado $filasActualizadas filas</p>";

            echo "<p>Libro después de actualizar:</p>";
            echo Libro::getById(3)
            ?>
        </section>

        <!-- Borrar un libro -->
        <section class="mb-5">
            <?php
            echo "<h3>Borrando el libro con el id 17...</h3>";

            $numeroFilasBorradas = Libro::delete(17);

            echo "<p>Se han borrado $numeroFilasBorradas filas</p>";

            // Intentamos recuperar el libro borrado
            echo "<p>Intentando recuperar el libro borrado...</p>";
            echo Libro::getById(17);

            // Si no hay libro devuelve null
            if (Libro::getById(17) === null) {
                echo "<p>No se ha encontrado el libro</p>";
            }
            ?>
        </section>

        <!-- Calculo de totales -->
        <section class="mb-5">
            <?php
            echo "<h3>Calculando totales...</h3>";

            echo "<p>Hay " . Libro::total() . " libros en la base de datos</p>";
            echo "<p>Hay ediciones " . Libro::total('MIN', 'ediciones') . "</p>";
            echo "<p>Hay ediciones " . Libro::total('MAX', 'ediciones') . "</p>";
            echo "<p>Hay ediciones " . Libro::total('AVG', 'ediciones') . "</p>";
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