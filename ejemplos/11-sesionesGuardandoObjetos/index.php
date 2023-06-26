<?php
// Path: ejemplos\11-sesiones\index.php
// session_start();
include './script.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Sesiones con Objetos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class=" text-white">Ejemplo de Sesiones con Objetos</h1>


        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>



    </header>

    <main class="p-2" id=''>

        <section class="mb-5">
            <div>
                <?php
                if (empty($_SESSION['usuario'])) { ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>

                <?php
                } else { ?>
                    <form method="POST">
                        <input type="hidden" name="logout">
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>

                <?php

                }

                ?>
            </div>

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