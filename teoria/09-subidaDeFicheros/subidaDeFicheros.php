<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Ficheros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Subida de Ficheros</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#trabajandoConFicheros">Trabajando Con Ficheros</a>
            <a href="#subirFicherosAlServidor">Subir ficheros al servidor</a>
            <a href="#formularioDeSubida">El formulario de Subida</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="trabajandoConFicheros">
            <h2>Trabajando Con Ficheros</h2>

            <p>PHP puede trabajar con ficheros y carpetas en el servidor.

                Puede crear carpetas, borrarlas, cambiar el nombre, crear ficheros,
                moverlos, leer, escribir, borrarlos, cambiar permisos, cambiar
                propietario, cambiar grupos...

                Realiza cualquier operación permitida por el sistema operativo
                (generalmente Linux), siempre y cuando se tengan los permisos
                adecuados.

                También dispone de extensiones para poder realizar operaciones
                con diferentes tipos de ficheros (imágenes, ficheros comprimidos,
                ficheros de Excel o Word, pdf, xml, json...).
            </p>

            <p>
                Y además puede tomar ficheros que han sido enviados por
                POST desde un formulario (mediante un input type file) y
                ubicarlos en el sistema de ficheros del servidor.

                Esto es lo que conocemos popularmente como “subir un archivo”
                y es el tema tratado a continuación.
            </p>


        </section>

        <section class="mb-5" id="subirFicherosAlServidor">
            <h2>Subir Ficheros Al Servidor</h2>

            <p>Con PHP es muy fácil tratar la subida de ficheros al servidor, tanto
                de texto como binarios.

                <a href="http://php.net/manual/es/features.file-upload.post-method.php">Ver documentación</a>


                 Básicamente, los ficheros deben ser enviados por POST desde
                formularios, en los que existirán entradas de tipo file.
                 Una vez enviados, quedan ubicados en un directorio temporal, del
                que tendremos que moverlos al directorio definitivo.
                 Si no los movemos, serán borrados automáticamente al finalizar el
                script.
            </p>

            <p>Existen algunas directivas de configuración en el fichero php.ini
                que debemos tener en cuenta:
            </p>

            <ul>
                <li>file_uploads: activa/desactiva la subida de ficheros.</li>
                <li>max_file_uploads: máximo número a subir simultáneamente.</li>
                <li>upload_max_filesize: tamaño máximo para cada fichero.</li>
                <li>upload_tmp_dir: directorio temporal donde se colocan los ficheros
                    subidos (por defecto /tmp en Linux).</li>
                <li>post_max_size: tamaño máximo de datos que se pueden enviar por
                    POST en una única petición (suma de datos del formulario y ficheros).</li>
                <li>max_input_time: tiempo máximo que puede tardar la subida.</li>
            </ul>





        </section>

        <section class="mb-5" id="formularioDeSubida">
            <h2>El formulario de subida</h2>

            <p>
                Al crear el formulario HTML, es importante tener en cuenta que los
                datos se deben enviar por POST y que el atributo enctype ha de
                tener el valor multipart/form-data.
            </p>

            <p>
                El formulario debe contener un input de tipo file, que será el que
                permita seleccionar el fichero a subir.

                El atributo name de este input será el que se utilice para acceder
                al fichero en el script PHP que lo recibe.
            </p>

            <p>Si queremos enviar los datos a un fichero php diferente (es decir,
                realizar una petición HTTP get diferente), podemos hacerlo
                mediante el atributo action.</p>

            <p>Si no se especifica, los datos se enviarán al mismo fichero que
                contiene el formulario.</p>


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