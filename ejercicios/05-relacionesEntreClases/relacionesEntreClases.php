<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaciones entre clases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Relaciones entre clases</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#01">Ejercicio 01</a>
            <a href="#02">Ejercicio 02</a>

        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="01">
            <h2>Ejercicio 01</h2>

            <p>Implementa los métodos mover() y perimetro() de la clase
                Figura, tal y como se detalla en el diagrama de clases.
            </p>

            <ul>
                <li>El método mover() desplaza todos los puntos de la figura.</li>
                <li>El método perimetro() calcula el perímetro de la figura.</li>
            </ul>

            <?php
            include_once '../../clases/Figura.php';
            include_once '../../clases/Punto.php';

            $figura = new Figura();

            // Añadimos puntos a la figura
            $figura->addPunto(new Punto(0, 0));
            $figura->addPunto(new Punto(0, 1));
            $figura->addPunto(new Punto(1, 1));
            $figura->addPunto(new Punto(1, 0));

            // Mostrar figura con var_dump  
            var_dump($figura);

            echo "<hr>Posicion original: <br>
            $figura <br>
            ";

            $figura->mover(5, 5);

            echo "<hr>Posicion final: <br>
            $figura <br>
            ";

            echo "<hr>Perimetro: " . $figura->perimetro() . "<br>";



            ?>
        </section>

        <section class="mb-5" id="02">
            <h2>Ejercicio 02</h2>

            <p>
                Implementa la clase Rectangulo, que
                realice una representación mediante un
                Punto y dos valores (ancho y alto).
            </p>

            <p>
                Debemos poder mover el rectángulo,
                llevarlo al origen, calcular su área,
                perímetro y diagonal.

                Realiza además las pruebas de todos los
                métodos y operaciones que implementes
                en un fichero de test aparte.
            </p>

            <?php
            include_once '../../clases/Rectangulo.php';
            include_once '../../clases/Punto.php';

            $rectangulo = new Rectangulo(new Punto(0, 0), 10, 20);

            echo "<hr>Posicion original: <br>
            $rectangulo <br>
            ";

            $rectangulo->mover(5, 5);

            echo "<hr>Posicion final: <br>
            $rectangulo <br>
            ";

            echo "<hr>Area: " . $rectangulo->area() . "<br>";

            echo "<hr>Perimetro: " . $rectangulo->perimetro() . "<br>";

            echo "<hr>Diagonal: " . $rectangulo->diagonal() . "<br>";


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