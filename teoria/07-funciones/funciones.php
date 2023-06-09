<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="d-flex flex-col justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Funciones</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section>
            <p>En programación, una función es una secuencia de instrucciones
                que especifica una tarea concreta, empaquetada como una unidad.</p>
            <ul>
                <li>Esta unidad puede ser usada en programas, allí donde sea necesario
                    realizar dicha tarea.</li>
                <li>
                    Las funciones pueden ser definidas dentro de los programas o en
                    librerías separadas.
                </li>
                <li>Se ejecutarán cuando sean llamadas.</li>
            </ul>

            <p>
                Una función ya hecha, vista desde el exterior, se puede considerar
                un mecanismo de caja negra.

                En la llamada, le pasaremos unos valores, con los que realizará
                unas operaciones y nos devolverá un resultado.
            </p>

            <p>
                Como en otros lenguajes, disponemos de una serie de funciones
                básicas ya implementadas, listas para usar.

                Además, PHP tiene una gran cantidad de extensiones del
                lenguaje (conectores para bases de datos, procesamiento de
                imágenes, ficheros PDF, ficheros comprimidos...) que también
                aportan sus propias colecciones de funciones (y/o métodos).

                <a href="https://www.php.net/manual/es/extensions.php">A modo info!</a>
            </p>

            <p>
                Listado completo de funciones y métodos incluye las
                de las extensiones
            </p>

            <div class="bg-secondary d-flex flex-column p-4 rounded">

                <a href="http://php.net/manual/es/indexes.functions.php" target="_blank">Completo
                </a>

                <a href="http://php.net/manual/es/funcref.php" target="_blank">Por categorias
                </a>
            </div>

        </section>

        <section class="mb-5" id="">
            <h2></h2>


        </section>

        <section class="mb-5" id="">
            <h2></h2>

        </section>

        <section class="mb-5" id="">
            <h2></h2>

        </section>


    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="./index.js"></script>
</body>

</html>