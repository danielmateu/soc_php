<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container justify-content-center align-items-center d-flex flex-column p-4">
    <h1>Ejercicio 05- Obtener info pasada por formulario </h1>
    <hr>

    <h2>Ejemplo GET</h2>

    <p>Este formulario se envia por GET</p>

    <form action="" method="get" class="form d-flex flex-column ">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos">
        <input type="submit" value="Enviar" name="enviar" class="mt-4 btn btn-success">
    </form>

    <pre class="mt-4 p-4 bg-dark text-white rounded">
        <?php
        // Mostrar los datos enviados por GET con el metodo var_dump()
        var_dump($_GET);
        ?>
    </pre>

    <hr>

    <h2>Ejemplo POST</h2>

    <p>Este formulario se envia por POST</p>

    <p>Los formularios los mandaremos por POST, no hay límite de envio de datos por post a no ser que lo ajustemos nosotros</p>

    <form action="" method="post" class="form d-flex flex-column ">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos">
        <input type="submit" value="Enviar" name="enviar" class="mt-4 btn btn-success">
    </form>

    <!-- Comprobar si llega el formulario -->
    <?php
    if (isset($_POST['enviar'])) {

        // Recuperar los datos enviados por POST
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];

        echo "<h2>Formulario enviado</h2>";
        // Mostrar los datos enviados por POST
        echo "<p>Bienvenido $nombre $apellidos</p>";
    }
    ?>

    <pre class="mt-4 p-4 bg-dark text-white rounded">
        <?php
        // Mostrar los datos enviados por POST con el metodo var_dump()
        var_dump($_POST);

        ?>
    </pre>


</body>

</html>