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
                // var_dump($_FILES);

                // Si hay errores mostrarlos
                if ($_FILES['fichero']['error'] != 0) {
                    echo '
                    <div class = "d-flex flex-column justify-content-center align-items-center bg-danger p-5 rounded">
                        <h3>Ha ocurrido un error 😚</h3>
                    </div>
                    
                    ';
                    switch ($_FILES['fichero']['error']) {
                        case 1:
                            echo 'El fichero subido excede la directiva upload_max_filesize de php.ini';
                            break;
                        case 2:
                            echo 'El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML';
                            break;
                        case 3:
                            echo 'El fichero subido fue sólo parcialmente cargado';
                            break;
                        case 4:
                            echo 'No se ha subido un fichero';
                            break;
                        case 6:
                            echo 'No existe un directorio temporal';
                            break;
                        case 7:
                            echo 'Fallo al escribir el fichero en el disco';
                            break;
                        case 8:
                            echo 'La subida del fichero fue detenida por la extensión';
                            break;
                        default:
                            echo 'Error indeterminado';
                            break;
                    }
                }

                // Controlar el tamaño del fichero
                if ($_FILES['fichero']['size'] > 1000000) {
                    echo '
                    <div class = "d-flex flex-column justify-content-center align-items-center bg-danger p-5 rounded">
                        <h3>El fichero es demasiado grande</h3>
                    </div>
                    
                    ';
                }

                // Ruta del fichero temporal
                $rutal_temporal = $_FILES['fichero']['tmp_name'];

                // Recuperar el tipo de MIME del fichero con Fileinfo
                $finfo = finfo_open(FILEINFO_MIME_TYPE);

                // Obtener el tipo MIME del fichero
                $tipo_mime = finfo_file($finfo, $rutal_temporal);

                // Comprobar que sea imagen
                if (strpos($tipo_mime, 'image') === false) {
                    echo '
                    <div class = "d-flex flex-column justify-content-center align-items-center bg-danger p-5 rounded">
                        <h3>El fichero no es una imagen</h3>
                    </div>
                    
                    ';

                    // Finalizar la ejecución del script
                    exit();
                }

                // Calcular la ruta final
                $ruta_final = './imagenes/' . $_FILES['fichero']['name'];

                // Mover el fichero de la carpeta temporal a la carpeta de destino
                // Si no hay errores mostrar la imagen
                if ($_FILES['fichero']['error'] == 0) {
                    // Mover el fichero de la carpeta temporal a la carpeta de destino
                    move_uploaded_file($_FILES['fichero']['tmp_name'], './imagenes/' . $_FILES['fichero']['name']);

                    // Mostrar la imagen
                    echo '
                    <div class = "mt-5 
                    d-flex flex-column justify-content-center align-items-center bg-success p-5 rounded">
                    <h3>Imagen subida correctamente</h3>
                    <p>Nombre original: ' . $_FILES['fichero']['name'] . '</p>

                    <img src="./imagenes/' . $_FILES['fichero']['name'] . '" alt="Imagen subida" class="img-fluid">

                    </div>';
                };


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