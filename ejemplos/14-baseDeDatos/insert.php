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

        <section class="mb-5" id="sesiones">
            <h2>Insert</h2>
            <?php
            // Conexión a la base de datos
            $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
            $conexion->set_charset('utf8');

            // Comprobar la conexión
            if ($conexion->connect_errno) {
                echo 'Fallo al conectar a MySQL: ' . $conexion->connect_error;
            } else {
                echo 'Conexión establecida con éxito';
            }

            // Prepara una consulta de ensercion en un string
            $consulta = "INSERT INTO libros(
                isbn, titulo, editorial, idioma, autor, ediciones, edadrecomendada
            )VALUES(
                '978-84-204-8301-5', 'El Quijote', 'Anaya', 'Castellano', 'Miguel de Cervantes', 1, 18
            )";

            // Ejecuta una consulta a la base de datos
            $resultado = $conexion->query($consulta);

            // Comprobar el resultado 
            if ($resultado) {
                // echo '<p>Se ha insertado correctamente </p>';
                // Mostrar el id del registro insertado
                echo '<p>Se ha insertado correctamente el registro con id ' . $conexion->insert_id . '</p>';
            } else {
                echo '<p>No se ha podido insertar</p>';
            }

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