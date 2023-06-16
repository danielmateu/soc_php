<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de la clase Figura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container d-flex flex-column p-4">

    <header class="header d-flex bg-dark p-2 mb-4 position-sticky top-0 start-0 rounded" id="menu">
        <h1 class="text-white">Ejemplo de la clase Figura</h1>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

        </div>

    </header>

    <hr>

    <h2>Creación de figuras</h2>

    <?php
    // Incluimos las clases
    require_once '../../clases/Punto.php';
    require_once '../../clases/Figura.php';

    // Creamos una figura
    echo '<p>Figura 1</p>';
    $figura = new Figura(
        new Punto(1, 1),
        new Punto(2, 2),
        new Punto(3, 3)
    );
    echo "<p>Figura:</p>";
    // Mostramos la figura
    echo $figura;

    // Movemos la figura
    $figura->mover(1, 1);
    echo '<p>Movemos la figura</p>';
    // Mostramos la figura
    echo $figura;

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