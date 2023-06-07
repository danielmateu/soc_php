<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container justify-content-center align-items-center d-flex flex-column p-4">
    <h1>Mi biblioteca</h1>
    <hr>


    <form action="" method="post" class="form d-flex flex-column ">
        <label for="tema">Tema</label>
        <input type="text" name="tema" id="tema">
        <label for="descripcion">descripcion</label>
        <input type="text" name="descripcion" id="descripcion">
        <input type="submit" value="Enviar" name="enviar" class="mt-4 btn btn-success">
    </form>

    <!-- Conectamos a la base de datos -->

    <?php
    // Si no se ha enviado el formulario, no se hace nada
    if (!isset($_POST['enviar'])) {
        exit();
    }

    // $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or die("Problemas de conexión");
    $conexion = new mysqli("localhost", "root", "", "biblioteca") or die("Problemas de conexión");
    $conexion->set_charset("utf8");

    // Recuperar los datos enviados por POST
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];

    // preparo la consulta de insercion
    $consulta = "INSERT INTO temas (tema, descripcion) VALUES ('$tema', '$descripcion')";

    //  ejecuto la consulta contra la base de datos
    // $conexion->query($consulta) or die("Problemas en la consulta: " . $conexion->error);
    echo $conexion->query($consulta) ? "Registro insertado" : "Registro NO insertado";
    ?>

</body>

</html>