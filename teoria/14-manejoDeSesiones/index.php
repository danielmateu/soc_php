<?php
// Crear una cookie
// setcookie("nombre", "valor", $expiracion, $ruta, $dominio, $seguridad);
setcookie("curso", "aplicaciones web", time() + 25);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de sesiones en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Manejo de sesiones en PHP</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#sesiones">Sesiones</a>
            <a href="#funcionamiento">Detalles de funcionamiento</a>
            <a href="#configuracion">Configuración de php.ini.</a>
            <a href="#gestionDeSesion">Gestión de la sesión</a>
            <a href="#destruyendoSesiones">Destruyendo sesiones</a>
            <a href="#masFunciones">Más funciones para trabajar con sesiones</a>
            <a href="#borrarCookie">Borrar la cookie de sesión</a>
            <a href="#guardandoObjetos">Guardando objetos</a>
            <a href="#loginYLogout">Login/logout</a>

        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>

        <section class="mb-5" id="sesiones">
            <h2>Sesiones</h2>

            <p>
                Las sesiones son una forma sencilla de guardar los datos entre
                peticiones en el servidor, de manera individual, mediante un
                identificador de sesión único.
            </p>

            <p>
                El uso de sesiones en PHP es muy sencillo:

                Para indicar que usaremos sesiones, comenzaremos nuestros ficheros
                PHP con la función session_start().

                Al igual que pasaba con la función setcookie(), no podemos imprimir
                nada antes de esta función, en caso contrario se enviarían los encabezados de la respuesta y session_start() no funcionaría.

                A partir de ese momento, dispondremos de un array asociativo superglobal, llamado $_SESSION en el cual podremos guardar y recuperar los datos de la sesión.
            </p>

            <p>
                Para crear una nueva variable de sesión guardaremos algo en la
                posición deseada del array $_SESSION:
                $_SESSION[‘usuario’] = “Pepe”;
            </p>

            <p>
                Para recuperar el valor de una variable de sesión, simplemente
                accederemos a la posición del array donde la guardamos:
                echo $_SESSION[‘usuario’];
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