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