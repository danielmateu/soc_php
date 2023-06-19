<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">File Upload</h1>

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

        </div>

    </header>

    <main class="p-2">

        <h2>Datos del fichero recibido en el servidor</h2>

        <section class="mb-5" id="ejemplo">

            <pre>
                <?php
                class UploadException extends Exception{}

                require_once './libraries/Upload.php';

                // Sube el fichero, hace las comprobaciones y retorna la ruta del fichero subido
                $ruta = Upload::save(
                    'fichero',
                    'imagenes',
                    true,
                    1048576,
                    'image/*',
                    'img_',
                    true
                );

                // Muestra el mensaje de exito
                echo '
                    <div class = "d-flex flex-column justify-content-center align-items-center bg-success p-5 rounded">
                        <h3>El fichero se ha subido correctamente 😎</h3>
                        <img src="' . $ruta . '" alt="Imagen subida" class="img-fluid">
                    </div>
                    
                    ';
                ?>
            </pre>

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