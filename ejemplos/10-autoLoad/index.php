<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de carga de clases con Autoload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class=" text-white">Ejemplo de carga de clases con Autoload</h1>
        <!-- <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#intro">Introducción</a>

        </nav> -->
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>



        <section class="mb-5">
            <?php
            include_once 'config/config.php';
            include 'libraries/autoload.php';

            // Crea una moto
            $moto = new Moto('Honda', 'CBR 1000 RR', 'Rojo', 220, 125);

            echo "
            <div class='alert alert-primary'>
            <h2>Imprime la moto - <strong>" . $moto->getNombre() . "</strong></h2>
            <pre>
            " . $moto . "
            </pre>
            </div>
            ";

            // Crea un coche
            $coche = new Coche('Seat', 'Arona', 'Azul', 145, 1200);
            //  Imprime el coche
            echo "
            <div class='alert alert-secondary'>
            <h2>Imprime el coche - <strong>" . $coche->getNombre() . "</strong></h2>
            <pre>
            " . $coche . "
            </pre>
            </div>
            ";

            // Crea un Vehículo
            $vehiculo = new Vehiculo('Boeing', '747', 'Gris', 750, 100000);
            //  Imprime el Vehículo
            echo "
            <div class='alert alert-success'>
            <h2>Imprime el Vehículo - <strong>" . $vehiculo->getNombre() . "</strong></h2>
            <pre>
            " . $vehiculo . "
            </pre>
            </div>
            ";

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