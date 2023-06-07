<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container justify-content-center align-items-center d-flex flex-column p-4">
    <h1>Mis Usuarios</h1>
    <hr>


    <form action="" method="post" class="form d-flex flex-column ">
        <label for="id">id</label>
        <input type="text" name="id" id="id">
        <label for="displayname">Nombre</label>
        <input type="text" name="displayname" id="displayname">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <label for="city">Ciudad</label>
        <input type="text" name="city" id="city">
        <label for="country">País</label>
        <input type="text" name="country" id="country">
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
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Encriptar la contraseña
    $password = password_hash($password, PASSWORD_DEFAULT);
    // $password = md5($_POST['password']);
    $displayname = $_POST['displayname'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // preparo la consulta de insercion
    $consulta = "INSERT INTO usuarios (id, email, password, displayname, city, country) VALUES ('$id', '$email', '$password', '$displayname', '$city', '$country')";

    //  ejecuto la consulta contra la base de datos
    // $conexion->query($consulta) or die("Problemas en la consulta: " . $conexion->error);
    echo $conexion->query($consulta) ? "Registro insertado" : "Registro NO insertado";
    ?>

    <!-- Obtener ip -->
    <!-- <pre>

    <?php
    // echo $_SERVER['REMOTE_ADDR'];
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo $_SERVER['HTTP_REFERER'];
    // echo $_SERVER['REQUEST_URI'];
    // echo $_SERVER['SCRIPT_NAME'];
    ?>
</pre> -->

</body>

</html>