<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria dinámica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Galeria dinámica</h1>

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

        </div>

    </header>

    <main class="p-1">

        <h2>Datos del fichero recibido en el servidor</h2>

        <section class="mb-5" id="ejemplo">

            <pre>
                <?php
                class UploadException extends Exception
                {
                }

                require_once './libraries/Upload.php';

                try {
                    // Sube el fichero, hace las comprobaciones y retorna la ruta del fichero subido
                    $ruta = Upload::save(
                        'fichero',
                        'imagenes',
                        true,
                        250000000,
                        'image/*',
                        'img_',
                        true
                    );

                    // Muestra el mensaje de exito
                    echo '
                        <div class = "d-flex flex-column justify-content-center align-items-center bg-success p-5 rounded">
                            <h3>El fichero se ha subido correctamente!</h3>
                            <h3>😊</h3>
                            <img src="' . $ruta . '" alt="Imagen subida" class="img-fluid">
                        </div>
                        ';
                } catch (UploadException $error) {
                    // abrir fichero error.log modo 'a'
                    // $fichero = fopen('error.log', 'a');

                    // Escribir mensaje de error en el fichero con la fecha y el mensaje de error
                    $mensaje = date('d-m-Y H:i:s') . "\n" . $error->getMessage() . ", en linea " . $error->getLine() . "\n";


                    // Cerrar fichero
                    // fclose($fichero);

                    // Uso del file_put_contents
                    file_put_contents('error.log', $mensaje, FILE_APPEND);


                    echo '
                        <div class = "d-flex flex-column justify-content-center align-items-center bg-danger py-5 rounded ">
                            <h3>' . $error->getMessage() . '</h3>
                            <h3>😢</h3>
                        </div>
                        ';
                } catch (Throwable $error) {
                    echo '
                        <div class = "d-flex flex-column justify-content-center align-items-center bg-danger py-5 rounded ">
                            <h3>' . $error->getMessage() . '</h3>
                            <h3>😢</h3>
                        </div>
                        ';
                }

                ?>
            </pre>

        </section>



    </main>



    <!-- Enlace que nos devuelve a la pagina index.php -->
    <a href="index.php" class="btn btn-secondary   mx-auto mt-5" id="btn-scroll">Volver al principio</a>


    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>
</body>

</html>