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
        <!-- Recuperar todos los socios -->
        <section class="mb-5" id="">
            <?php
            // Pruebas de select() o selectOne()
            echo "<h3>Recuperando todos los socios</h3>";
            $socios = Socio::get();
            // Mostramos una lista de los socios
            echo "<ul>";
            foreach ($socios as $socio) {
                echo "<li>$socio</li>";
            }
            echo "</ul>";

            ?>
        </section>

        <!-- Recuperar un cliente que existe -->
        <section class="mb-5" id="">
            <?php
            echo "<h3>Recuperando el cliente con el id 3...</h3>";

            $cliente = Socio::getById(3);
            echo "<pre>";
            echo $cliente;
            echo "</pre>";
            ?>
        </section>

        <!-- Guardar un socio -->
        <section class="mb-5">
            <?php
            // echo "<h3>Guardando un nuevo socio...</h3>";

            // // Creamos un nuevo socio
            // $socio = new Socio();

            // // Asignamos sus propiedades
            // $socio->nombre = 'Daniel';
            // $socio->apellidos = 'Mateu';
            // $socio->dni = '46410283D';
            // $socio->direccion = 'C/ La Paz, 3';
            // $socio->telefono = '963852741';
            // $socio->email = 'danielmateu@gmail.com';


            // // Guarda el libro y actualiza su ID
            // $socio->save();
            // echo "<p>Socio guardado con el id $socio->id</p>";

            // // Mostrar el socio guardado
            // echo "<p>Mostrando el socio guardado...</p>";
            // echo Socio::getById($socio->id);
            ?>
        </section>

        <!-- Actualizar Socio -->
        <section class="mb-5">
            <?php
            echo "<h3>Actualizando el Cliente con el id 27.</h3>";

            $socio = Socio::getById(27);
            echo "<p>Socio antes de actualizar:</p>";
            echo $socio;

            // // Actualizamos sus propiedades
            // $socio->nombre = 'Daniel';
            // $socio->apellidos = 'Mateu';
            // $socio->dni = '46410283D';
            // $socio->direccion = 'C/ La Paz, 3';
            // $socio->telefono = '617039997';
            // $socio->email = 'dani@mail.com';

            // // Guarda el libro y actualiza su ID
            // $socio->save();
            // echo "<p>Socio actualizado con el id $socio->id</p>";

            // // Mostrar el socio guardado
            // echo "<p>Mostrando el socio actualizado...</p>";
            // echo Socio::getById($socio->id);

            ?>
        </section>

        <!-- Borrar un libro -->
        <section class="mb-5">
            <?php
            // echo "<h3>Borrando el libro con el id 17...</h3>";

            // $numeroFilasBorradas = Libro::delete(17);

            // echo "<p>Se han borrado $numeroFilasBorradas filas</p>";

            // // Intentamos recuperar el libro borrado
            // echo "<p>Intentando recuperar el libro borrado...</p>";
            // echo Libro::getById(17);

            // // Si no hay libro devuelve null
            // if (Libro::getById(17) === null) {
            //     echo "<p>No se ha encontrado el libro</p>";
            // }
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