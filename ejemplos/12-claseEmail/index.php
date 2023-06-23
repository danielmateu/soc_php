<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejemplo con la clase Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../styles.css" />
    <link rel="icon" href="../../favicon.ico" type="image/x-icon" />
</head>

<body class="container p-4 position-relative">
    <header class="header d-flex flex-column bg-dark p-4 mb-4 position-sticky top-0 start-0 col-12 rounded opacity-4" id="menu">
        <h1 class="text-white">Ejemplo con la clase Email</h1>
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
            <h2 class="border-bottom">Introducción</h2>
            <p class="mt-3">
                En este ejemplo veremos cómo usar la clase Email para enviar emails.
            </p>

            <p>
                La idea es crear un objeto tipo Email, con los parámetros adecuados y
                llamar a un método enviar() que retornará true o false.
            </p>

            <?php
            include './config/config.php';
            include './libraries/autoload.php';

            $from = 'dani@hotmail.com';
            $name = 'dani';
            $to = 'hmrejsneqtlrvqaeqa@tcwlm.com';
            $subject = 'prueba de envio local';
            $message = 'prueba de envio local';

            // Creamos el nuevo email
            $email = new Email($from, $name, $to, $subject, $message);

            // Enviamos el email
            echo $email->send() ? 'Email enviado' : 'Email no enviado';
            ?>


        </section>

        <section id="massiveMailing">
            <h2>Envío de mails masivo</h2>

            <p>es muy fácil
                hacernos un mailer masivo que envíe información a todos los
                contactos que tengamos en nuestra base de datos.

                 En el ejemplo siguiente, muestro cómo enviar emails a todas las
                direcciones que tengamos en un array, simulando que han sido
                recuperados de la BDD.
            </p>

            <?php



            // Array con los destinatarios
            $direcciones = [
                'dani@gmail.com',
                'meh@gmail.com',
                'pepe@hotmail.com',
                'nuk@gmail.com'
            ];

            $from = 'dani@hotmail.com';
            $name = 'dani';
            $to = '';
            $subject = 'prueba de envio local';
            $message = 'prueba de envio local';

            // Creamos el nuevo email
            $emailMasivo = new Email($from, $name, $to, $subject, $message);

            foreach ($direcciones as $direccion) {
                // Cambiamos el destinatario
                $emailMasivo->to($direccion);
                // Enviamos el email
                $emailMasivo->send();
            }

            echo 'Emails enviados';

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