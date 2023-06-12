<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="d-flex justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Ejemplos Funciones</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around no-wrap">
            <a href="#introFunciones">Inicio</a>
            <a href="#creandoFunciones">creando</a>
            <a href="#probandoFunciones">probando</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section id="valorDeRetorno">
            <h2>Ejemplo parámetros de tipos primitivos</h2>

            <?php
            function valor(int $numero) //Paso por valor
            {
                $numero++;
            }

            function referencia(int &$numero) //Paso por referencia
            {
                $numero++;
            }

            // Prueba de paso por valor
            $numero = 5;
            echo "<p>Valor inicial: $numero</p>";
            valor($numero);

            echo "<p>Valor después de llamar a la función valor: $numero</p>";

            // Prueba de paso por referencia
            $numero = 5;
            echo "<p>Valor inicial: $numero</p>";
            referencia($numero);

            echo "<p>Valor después de llamar a la función referencia: $numero</p>";


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