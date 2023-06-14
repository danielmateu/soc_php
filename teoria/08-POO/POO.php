<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">POO</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#introPOO">Intro</a>
            <a href="#clases">Clases</a>
            <a href="#abstraccion">Abstraccion</a>
            <a href="#encapsulacion">Encapsulacion</a>
            <a href="#modularidad">Modularidad</a>
            <a href="#polimorfismo">Polimorfismo</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="introPOO">
            <h2>Orientacion Orientada a Objetos</h2>

            <p>La programación orientada a objetos es un paradigma surgido
                en los años 70, que utiliza objetos como elementos
                fundamentales en la construcción de la solución.
            </p>

            <p>
                Un objeto es una abstracción de algún hecho o ente del
                mundo real, con atributos que representan sus características o
                propiedades, y métodos que emulan su comportamiento o
                actividad.
            </p>

            <p>
                La programación orientada a objetos se basa en la
                programación estructurada, pero añade nuevos conceptos
                como la abstracción, encapsulación, modularidad y
                polimorfismo.
            </p>

        </section>

        <section class="mb-5" id="clases">

            <h2>Clases</h2>

            <p>
                Una clase es una plantilla para la creación de objetos de datos según un modelo predefinido.
                Las clases se utilizan para representar entidades o conceptos. Cada clase es un modelo que define un conjunto de variables (el estado), y métodos apropiados para operar con dichos datos (el comportamiento).
            </p>

            <p>
                Las clases se utilizan para representar entidades o conceptos. Cada clase es un modelo que define un conjunto de variables (el estado), y métodos apropiados para operar con dichos datos (el comportamiento).

            </p>



            <?php
            require_once '../../clases/Coche.php';

            $seatIbiza = new Coche('Seat', 'Ibiza', 'Rojo', 0);
            $wvPolo = new Coche('WV', 'Polo', 'Azul', 0, 20000);

            // Acelerar el coche
            $seatIbiza->acelerar();
            $seatIbiza->acelerar();
            $seatIbiza->acelerar();

            // Frenar el coche
            $seatIbiza->frenar();

            // Parar el coche
            // $seatIbiza->parar();

            echo $seatIbiza->mostrarInformacion();
            echo '<br>';
            echo $wvPolo->mostrarInformacion();

            ?>
        </section>




    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="./index.js"></script>
</body>

</html>