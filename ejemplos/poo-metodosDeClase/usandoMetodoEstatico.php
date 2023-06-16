<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando un método estático</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container d-flex flex-column p-4">

    <header class="header d-flex bg-dark p-2 mb-4 position-sticky top-0 start-0 rounded" id="menu">
        <h1 class="text-white">Usando un método estático</h1>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

        </div>

    </header>

    <?php
    // require_once './Circulo.php';
    require_once '../../clases/Punto.php';

    $p1 = new Punto(100, 100);
    $p2 = new Punto(200, 200);

    // Calcula la distancia entre los dos puntos usando el método estático
    // Planteado como método de clase:
    $distancia = Punto::distanciaEntreDosPuntos($p1, $p2);
    echo "
    <h3>Calcula la distancia entre los dos puntos usando el método estático</h3>
    <p>La distancia entre los puntos $p1 y $p2 es $distancia</p>
    
    ";

    // Planteado como método de objeto:
    $distanciaComoMetodoDeObjeto = $p1->distancia($p2);
    echo "
    
    <h3>Calcula la distancia entre los dos puntos usando el método objeto</h3>
    <p>La distancia entre los puntos $p1 y $p2 es $distanciaComoMetodoDeObjeto</p>";

    // Calcula la distancia entre los dos puntos usando el método de objeto
    $distancia = $p2->distancia($p1);
    echo "
    <h3>Calcula la distancia entre los dos puntos usando el método de objeto</h3>
    <p>La distancia entre los puntos $p1 y $p2 es $distancia</p>";

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