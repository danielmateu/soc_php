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
    <title>Envio Emails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Envio Emails</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#intro">Introducción</a>
            <a href="#configuracionDelServidor">Configuracion del Servidor</a>
            <a href="#enviandoEmails">Enviando un email</a>
            <a href="#solucionDeProblemas">Solución de problemas</a>
            <a href="#emailsConContenido">Emails con Contenido</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>

        <section class="mb-5" id="intro">
            <h2>Introducción</h2>

            <p>Muchas veces querremos enviar emails desde nuestras
                aplicaciones.

                Los motivos pueden ser diversos, entre los que se incluyen:
            </p>

            <ul>
                <li>Permitir a los usuarios contactaros directamente al email, pero sin
                    facilitarles la dirección.</li>
                <li>Validar el email que un usuario usó para el registro.</li>
                <li>Renovar una clave de acceso olvidada...</li>
            </ul>

            <p>Para ello, PHP nos proporciona una serie de funciones que nos permiten enviar emails desde nuestro servidor.</p>

            <p>PHP dispone de la función mail() para esta tarea.</p>

            <p>La función mail() tiene la siguiente sintaxis:</p>

            <pre class="bg-dark text-white p-2">
                mail($to, $subject, $message, $headers, $parameters);
            </pre>

            <p>Donde:</p>

            <ul>
                <li>$to: es el destinatario del email.</li>
                <li>$subject: es el asunto del email.</li>
                <li>$message: es el mensaje del email.</li>
                <li>$headers: son las cabeceras del email.</li>
                <li>$parameters: son los parámetros adicionales.</li>
            </ul>

        </section>

        <section id="configuracionDelServidor" class="mb-5">

            <h2>Configuración del Servidor</h2>

            <p>Para poder enviar emails desde nuestro servidor, debemos configurar el servidor de correo.</p>

            <p>Para ello, debemos editar el archivo php.ini y configurar los siguientes parámetros:</p>

            <pre class="bg-dark text-white p-2">
                [mail function]
                ; For Win32 only.
                ; http://php.net/smtp
                SMTP = localhost
                ; http://php.net/smtp-port
                smtp_port = 25
                username = "usuario"
                password = "contraseña"


            </pre>

            <p>En el caso de que nuestro servidor de correo requiera autenticación, debemos configurar los parámetros username y password.</p>


        </section>

        <section id="enviandoEmails" class="mb-5">
            <h2>Enviando un email</h2>

            <p>
                Solamente con esto ya nos debería dejar enviar emails, para hacer
                una prueba y estar seguros, nos enviaremos un mail
            </p>

            <?php
            // Enviamos un email
            $to = "domasa1508@anwarb.com";
            $subject = "Prueba de envio de email";
            $message = "Hola, esto es una prueba de envio de email";
            $headers = "To: <$to>\r\n";
            $headers .= "From: LOCALHOST <pepe@hotmail.com\r\n";

            echo mail($to, $subject, $message, $headers) ? "Email enviado" : "Email no enviado";
            ?>

            <p>Si no nos ha dado ningún error, es que todo ha ido bien.</p>

            <p>Si nos ha dado un error, debemos revisar la configuración del servidor de correo.</p>

            <p>Si estamos en un servidor compartido, es posible que no nos deje enviar emails.</p>

            <p>En este caso, debemos contactar con nuestro proveedor de hosting para que nos lo configure.</p>

            <p>Si estamos en un servidor dedicado, debemos instalar un servidor de correo.</p>

        </section>

        <section id="solucionDeProblemas" class="mb-5">
            <h2>Solución de problemas</h2>

            <p>Si nos da un error, debemos revisar la configuración del servidor de correo.</p>

            <p>Si estamos en un servidor compartido, es posible que no nos deje enviar emails.</p>

            <p>En este caso, debemos contactar con nuestro proveedor de hosting para que nos lo configure.</p>

            <p>Si estamos en un servidor dedicado, debemos instalar un servidor de correo.</p>

        </section>

        <section id="emailsConContenido" class="mb-5">
            <h2>Emails con Contenido</h2>

            <p>Para enviar emails con contenido, debemos usar las cabeceras.</p>

            <p>Las cabeceras nos permiten enviar emails con contenido HTML, con archivos adjuntos, etc.</p>

            <p>Para enviar un email con contenido HTML, debemos añadir la cabecera Content-type: text/html.</p>

            <p>Por ejemplo:</p>

            <pre class="bg-dark text-white p-2">
                $to = "";
                $subject = "Prueba de envio de email";
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "To: &lt;$to&gt;\r\n";
                $headers .= "From: LOCALHOST &lt;
                
                $message = "&lt;h1&gt;Hola&lt;/h1&gt;&lt;p&gt;Esto es una prueba de envio de email&lt;/p&gt;";
                echo mail($to, $subject, $message, $headers) ? "Email enviado" : "Email no enviado";

            </pre>

            <?php
            // Enviamos un email con contenido HTML
            $to = "cabebbd593@mymaily.lol";
            $subject = "Prueba de envio de email";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "To: <$to>\r\n";
            $headers .= "From: LOCALHOST <pepe@hotmail.com>\r\n";

            $message = <<<EOD
            <!DOCTYPE html>
                <head>
                    <html lang='en'>
                    <title>Prueba de envio de email</title>
                    
                </head>
                <body>
                    <h1>Hola</h1><p>Esto es una prueba de envio de email</p>
                </body>
            </html>
            EOD;

            echo mail($to, $subject, $message, $headers) ? "Email enviado a las " . date('H:i:s') : "Email no enviado";

            // Mostrar contenido del email
            echo "<pre class='bg-dark text-white p-2 mt-2'>";
            echo $message;
            echo "</pre>";
            ?>

        </section
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