<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container d-flex flex-column p-4">

    <header class="header d-flex justify-content-center bg-dark  p-2 mb-4 position-sticky top-0 start-0 col-12 rounded" id="menu">
        <h1 class="col-6 text-white">Creando y probando la clase Circulo</h1>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

        </div>

    </header>

    <hr>

    <?php
    // require_once './Circulo.php';
    require_once '../../clases/Punto.php';
    require_once '../../clases/Circulo.php';

    // Creacion del objeto circulo
    $centro = new Punto(2, 3);
    $circulo = new Circulo($centro, 5);

    // Mostrar Circulo
    echo "<h2 class='text-center'>Mostrando el circulo</h2>";

    // Mostrar el centro
    // echo "<p class='text-center'>Centro: $centro</p>";

    echo "<p class='text-center'>Circulo: $circulo</p>";

    ?>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>
</body>

</html>