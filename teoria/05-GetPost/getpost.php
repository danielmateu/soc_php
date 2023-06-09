<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get y Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="d-flex flex-col justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Get y Post</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around">
            <a href="#if">if</a>
            <a href="#ifelse">if-else</a>
            <a href="#switch">switch</a>
            <a href="#operadorTernario">operador ternario</a>
            <a href="#operadorNull">operador ??</a>
        </nav>
        <!-- Boton para cambio de modo -->

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>


    <p>Con PHP podemos capturar la información que nos llega a la
        aplicación mediante los métodos HTTP GET y POST.</p>
    >

    <p>Esto se utilizará en diversas situaciones, pero una de las más
        importantes es procesar la información de los formularios:</p>

    <ul>
        <li>GET: se utiliza para enviar poca información, como por ejemplo
            un identificador de un registro, o un parámetro de búsqueda.</li>
        <li>POST: se utiliza para enviar información más extensa, como por
            ejemplo los datos de un formulario.</li>
    </ul>

    <p>Para capturar la información que nos llega a la aplicación, se
        utiliza la variable superglobal $_GET o $_POST, dependiendo del
        método utilizado.</p>

    <p>La información que nos llega a la aplicación se envía en pares
        clave-valor, por lo que para acceder a la información que nos
        llega, utilizaremos la clave.</p>

    <p>Por ejemplo, si nos llega la información de un formulario con el
        método GET, y el formulario tiene un campo con el nombre
        "nombre", para acceder al valor de ese campo, utilizaremos
        $_GET["nombre"].</p>

    <p>Si nos llega la información con el método POST, utilizaremos
        $_POST["nombre"].</p>

    <p>Si queremos comprobar si nos llega información con el método GET,
        utilizaremos la función isset($_GET["nombre"]).</p>

    <p>Si queremos comprobar si nos llega información con el método POST,
        utilizaremos la función isset($_POST["nombre"]).</p>

    <p>Si queremos comprobar si nos llega información con el método GET o
        POST, utilizaremos la función isset($_REQUEST["nombre"]).</p>

    <p>Si queremos comprobar si nos llega información con el método GET o
        POST, y además queremos comprobar si el valor es vacío, utilizaremos
        la función empty($_REQUEST["nombre"]).</p>

    <p>Si queremos comprobar si nos llega información con el método GET o
        POST, y además queremos comprobar si el valor es vacío, y además
        queremos comprobar si el valor es igual a un valor determinado,
        utilizaremos la función empty($_REQUEST["nombre"]) &&
        $_REQUEST["nombre"] == "valor".</p>

    <p>Si queremos comprobar si nos llega información con el método GET o
        POST, y además queremos comprobar si el valor es vacío, y además
        queremos comprobar si el valor es igual a un valor determinado, y
        además queremos comprobar si el valor es de un tipo determinado,
        utilizaremos la función empty($_REQUEST["nombre"]) &&
        $_REQUEST["nombre"] == "valor" && gettype($_REQUEST["nombre"]) ==
        "tipo".</p>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor

    </footer>

    <script src="./index.js"></script>
</body>

</html>