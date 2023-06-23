<?php
include './clases/Producto.php';

$cafe = new Producto('Café', 1.20, 1, 'cafe.jpg');
$galleta = new Producto('Galleta', 0.80, 1, 'galleta.jpg');
$leche = new Producto('Leche', 1.10, 1, 'leche.jpg');

$objetos = [
    'cafe' => $cafe,
    'galleta' => $galleta,
    'leche' => $leche
];

setcookie('productos', serialize($objetos), time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Cookies como objeto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class=" text-white">Enviar Cookies como objeto</h1>
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
            // Si se ha enviado la cookie mostrar su contenido
            if (isset($_COOKIE['productos'])) {
                $productos = unserialize($_COOKIE['productos']);
                foreach ($productos as $producto) {
                    echo "<p>$producto</p>";
                }
            } else {
                echo "<p>No se ha enviado la cookie</p>";
            }

            // Eliminar la cookie para que no se muestre en la siguiente carga
            // setcookie('productos', '', time() - 3600);
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