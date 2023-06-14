<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container d-flex flex-column p-4">

    <header class="header d-flex justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0 col-12 rounded" id="menu">
        <h1 class="col-6 text-white">Creando y probando la clase Punto</h1>
        <!-- <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around no-wrap">
            <a href="#introFunciones">Inicio</a>
            <a href="#creandoFunciones">creando</a>
            <a href="#probandoFunciones">probando</a>
        </nav> -->
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <hr>

    <?php
    require_once '../../clases/Punto.php';

    // Crear un objeto de la clase Punto
    $punto1 = new Punto(2, 3);

    echo "<p>La posicion del \$punto1 es $punto1</p>";
    // Mover punto1 dos posiciones hacia la derecha y una hacia abajo
    $punto1->mover(2, 1);
    echo "<p><strong>Ahora</strong> la posicion del \$punto1 es $punto1</p>";

    // Crear otro objeto de la clase Punto
    $punto2 = new Punto();
    echo "<p>La posicion del \$punto2 es $punto2</p>";

    // Creamos otro punto   
    $punto3 = new Punto();

    // Clonamos el punto3 en el punto4
    $punto4 = clone $punto3;

    // Comprobar si dos puntos son iguales
    echo "<p>¿Son iguales \$punto2 y \$punto3? " . ($punto2->igual($punto3) ? '<strong>Si</strong>' : '<strong>No</strong>') . "</p>";

    // Comprobar si dos puntos son el mismo
    echo "<p>¿Son el mismo \$punto4 y \$punto3? " . ($punto4->esIgual($punto3) ? '<strong>Si</strong>' : '<strong>No</strong>') . "</p>";

    // Mover punto2 una posicion hacia la derecha
    $punto2->mover(1, 0);
    echo "<p><strong>Ahora</strong> la posicion del \$punto2 es $punto2</p>";

    // Calcular la distancia entre los dos puntos
    echo "<p>La <strong>distancia</strong> entre \$punto1 y \$punto2 es " . $punto1->distancia($punto2) . "</p>";


    // Devolver el punto al origen
    echo "<p>Devolvemos el \$punto1 y \$punto2  al origen</p>";
    $punto1->origen();
    $punto2->origen();
    echo "<p>La <strong>distancia</strong> entre \$punto1 y \$punto2 es " . $punto1->distancia($punto2) . "</p>";


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