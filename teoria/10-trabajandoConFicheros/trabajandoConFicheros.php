<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Ficheros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

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

            </p>

            <p>

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

            <p>Las funciones para trabajar con archivos (ficheros) las
                encontraremos en el manual de PHP en el siguiente <a href="http://php.net/manual/es/ref.filesystem.php" class="enlace"><strong>enlace</strong></a>
            </p>

            <p>Para abrir un fichero, usaremos fopen(), y para cerrarlo fclose().</p>

            <p>
                Para leer un fichero, usaremos fread(), fgets(), fgetc(), etc.
                Para escribir en un fichero, usaremos fwrite(), fputs(), etc.

            </p>

            <p>Podemos comprobar si un fichero existe con
                file_exists(), y borrarlo con unlink().</p>
            </p>

            <p>Tambien podemos comprobar si es legible o si se puede escribir en el con is_readable() y is_writable() respectivamente.
            </p>

            <p>Para crear un directorio usaremos mkdir(), y para borrarlo rmdir().</p>


        </section>

        <section class="mb-5">
            <h2>Apuntador a fichero</h2>

            <p>
                Una vez que el fichero está abierto y disponemos de la variable con el apuntador, podemos realizar operaciones de lectura o escritura sobre el fichero.
            </p>

            <p>
                Para leer un fichero, usaremos fread(), fgets(), fgetc(), etc.
                Para escribir en un fichero, usaremos fwrite(), fputs(), etc.
            </p>

            <p>Por lo general, leeremos o escribiremos en la <strong>posición a la que apunte</strong> el apuntador</p>

            <p>Este apuntador se mueve cada vez que leemos o escribimos, pero tambien lo podremos mover a nuestro antojo usando la función <strong>fseek()</strong> que recibe como parametros el apuntador, la posición a la que queremos moverlo y la constante que indica desde donde queremos moverlo.

            </p>

        </section>

        <section class="mb-5">
            <h2>Modos de apertura</h2>

            <p>Existen diversos <strong>modos de apertura</strong></p>

            <ul>
                <li>r:
                    <p>Abre el fichero para lectura. El fichero debe existir previamente.</p>
                </li>
                <li>r+:
                    <p>Abre el fichero para lectura y escritura. El fichero debe existir previamente.</p>
                </li>
                <li>w:
                    <p>Abre el fichero para escritura. Si no existe, lo crea. Si existe, lo sobreescribe.</p>
                </li>
                <li>w+:
                    <p>Abre el fichero para lectura y escritura. Si no existe, lo crea. Si existe, lo sobreescribe.</p>
                </li>
                <li>a:
                    <p>Abre el fichero para escritura. Si no existe, lo crea. Si existe, escribe al final del fichero.</p>
                </li>
                <li>a+:
                    <p>Abre el fichero para lectura y escritura. Si no existe, lo crea. Si existe, escribe al final del fichero.</p>
                </li>
            </ul>



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