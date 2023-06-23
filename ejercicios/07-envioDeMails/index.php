<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio con la clase Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../styles.css" />
    <link rel="icon" href="../../favicon.ico" type="image/x-icon" />
</head>

<body class="container p-4 position-relative">
    <header class="header d-flex flex-column bg-dark p-4 mb-4 position-sticky top-0 start-0 col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Ejercicio con la clase Email</h1>
        <!-- <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#intro">Introducción</a>

        </nav> -->
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>
    </header>

    <main class="p-2" id="">
        <section class="mb-5">
            <h3>Creación de Formulario</h3>

            <p>
                Crea un formulario de contacto que permita a los usuarios realizar
                consultas que llegarán a nuestro email.

                Los campos que deben rellenar pueden ser: nombre, email,
                asunto, mensaje... La cuenta de correo de destino será una
                nuestra.
            </p>

            <!--Inicio  Formulario -->

            <form action="enviar.php" method="POST" class="row g-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required />
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                </div>
                <div class="col-12">
                    <label for="asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required />
                </div>
                <div class="col-12">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name='enviar'>Enviar</button>
            </form>
            <!-- Fin Formulario -->

            <?php
            require './config/config.php';
            require './libraries/autoload.php';

            $direcciones = [
                'dani@gmail.com',
                'meh@gmail.com',
                'pepe@hotmail.com',
                'nuk@gmail.com'
            ];

            // Si se ha enviado el formulario
            if (isset($_POST['enviar'])) {
                // Creamos un objeto de la clase Email
                $email = new Email(
                    $_POST['nombre'],
                    $_POST['email'],
                    $_POST['asunto'],
                    $_POST['mensaje'],
                    $_TO['']
                );

                foreach ($direcciones as $direccion) {
                    // Cambiamos el destinatario
                    $email->to($direccion);
                    // Enviamos el email
                    $email->send();
                }

                // Mostramos el resultado
                echo "
                <p class='alert alert-success mt-3'>El email se ha enviado correctamente</p>
                
                <p class='alert alert-info mt-3'>Datos del email enviado:</p>

                <p>De: {$email->getInfo()}</p>
                ";
            }

            ?>
        </section>

    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy;
        <?= date('Y') ?>
        - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>
</body>

</html>