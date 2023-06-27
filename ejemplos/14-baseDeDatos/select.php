<?php
// Crear una cookie
// setcookie("nombre", "valor", $expiracion, $ruta, $dominio, $seguridad);
// setcookie("curso", "aplicaciones web", time() + 25);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Base de datos</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>

        <h2>SELECT</h2>
        <section class="mb-5" id="">
            <h3>Solo un resultado</h3>
            <?php
            // Conexión a la base de datos
            $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
            $conexion->set_charset('utf8');

            // Preparamos y lanzamos una consulta de selección
            $consulta = "SELECT * FROM libros WHERE id = 1";
            $resultado = $conexion->query($consulta);

            // Mostramos el resultado de la consulta
            if ($resultado->num_rows) {
                $fila = $resultado->fetch_assoc();
                // Liberamos la memoria ocupada por el resultado
                $resultado->free();
                echo "<p>El libro con id 1 es: " . $fila['titulo'] . "</p>";
            } else {
                echo "<p>No hay libros</p>";
            }

            echo "<pre>";
            var_dump($fila);
            echo "</pre>";

            ?>

        </section>

        <section class="mb-5">
            <h3>Varios resultados</h3>
            <?php
            // Preparamos y lanzamos una consulta de selección que selecciona el id, titulo y autor de libros ordenados por id de forma ascendente y mostrando solo los 10 primeros
            $consulta = "SELECT id, titulo, autor FROM libros ORDER BY id ASC LIMIT 10";
            // $consulta = "SELECT id, titulo, autor FROM libros ORDER BY id ASC";

            $resultado = $conexion->query($consulta);

            echo "<p>Hay " . $resultado->num_rows . " libros</p>";

            // Mostramos el resultado de la consulta
            if ($resultado->num_rows) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo $fila['id'] . " - " . $fila['titulo'] . "</p>";
                }
                // Liberamos la memoria ocupada por el resultado
                $resultado->free();
            } else {
                echo "<p>No hay libros</p>";
            }
            ?>

        </section>

        <section class="mb-5">
            <h3>Método fetch_object</h3>

            <p>
                Uno de los métodos más interesantes de la clase mysqli_result es
                fetch_object(), que mapea una fila del resultado en un objeto y lo
                retorna.
            </p>

            <p>
                Recibe por parámetro el nombre de la clase de la que queremos que
                sea el objeto retornado, a modo de String. </br>
                Si no se especifica la clase, se crea un objeto de tipo stdClass.</br>
                Los nombres de los campos recuperados en la consulta serán los
                nombres de las propiedades del objeto.
            </p>

            <p>
                Tras el mapeo se llama al constructor, hay que ir con cuidado si
                tenemos <strong>constructores definidos.</strong>
            </p>

            <?php
            // Preparamos y lanzamos la consulta que selecciona el id, titulo y autor de libros ordenandolos por id de forma ascendente
            $consulta = "SELECT id, titulo, autor FROM libros ORDER BY id ASC";
            $resultado = $conexion->query($consulta);

            echo "<p>Hay " . $resultado->num_rows . " libros</p>";

            // Convertimos el resultado en un objeto
            if ($resultado->num_rows) {
                while ($fila = $resultado->fetch_object()) {
                    echo $fila->id . " - " . $fila->titulo . "</p>";
                }
                // Liberamos la memoria ocupada por el resultado
                $resultado->free();
            } else {
                echo "<p>No hay libros</p>";
            }

            ?>
        </section>

        <section class="mb-5">
            <h3>Mapeando a tipos concretos</h3>

            <p>
                Si queremos que el objeto retornado sea de una clase concreta, podemos
                pasar el nombre de la clase como parámetro de fetch_object().
            </p>

            <p>
                Mapearemos cada fila del resultado a un
                objeto de tipo Libro (en vez de stdClass), y lo meteremos en una
                lista. Al final tendremos una lista de libros. <br>

                Resulta muy útil poder hacer una conversión directa de
                una fila de la BDD a un objeto de un tipo concreto, puesto que
                dispondremos de todos los métodos definidos en su clase.
            </p>
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