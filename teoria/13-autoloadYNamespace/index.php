<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoload y namespaces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Autoload y namespaces</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#intro">Introducción</a>

        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id=''>

        <section class="mb-5">
            <h2>Introducción</h2>

            <p>
                Normalmente, cuando trabajamos en proyectos, implementamos
                múltiples clases que guardamos en ficheros separados.

                Por norma general, se guarda una clase por fichero, haciendo
                coincidir el nombre del fichero con el nombre de la clase.

                En PHP no es obligatorio hacer coincidir los nombres, pero si usamos
                algún framework se nos obligará a seguir dicha pauta.
            </p>

            <p>
                Los ficheros con clases se suelen ubicar en carpetas concretas de
                la aplicación: models, controllers, libraries, templates...
            </p>

        </section>

        <section class="mb-5" id="cargandoClases">

            <h2>Cargando clases</h2>

            <p>
                Hasta ahora, cuando hemos necesitado una clase, hemos usado
                require o include para cargar el fichero correspondiente.

                La pega principal es que si tenemos que cargar muchas clases, necesitaremos muchos includes.

                Es posible que nos olvidemos de alguno o que, según el flujo de programa, acabemos cargando las cosas varias veces o teniendo problemas con las rutas.
            </p>

        </section>

        <section class="mb-5" id="cargaAutomatica">
            <h2>Carga automática</h2>

            <p>
                Para evitar estos problemas, PHP nos permite registrar una función que se ejecutará cada vez que se intente cargar una clase.

                Esta función se llama <a href="https://www.php.net/manual/es/function.spl-autoload-register.php">spl_autoload_register</a> y recibe como parámetro el nombre de una función.

                Cuando se intente cargar una clase, PHP ejecutará la función que le hemos pasado como parámetro.

                Esta función debe recibir como parámetro el nombre de la clase que se quiere cargar.

                La función debe cargar el fichero que contiene la clase.

                Si la clase no existe, la función debe devolver false.

                Si la clase existe, la función debe devolver true.

                Si la función devuelve false, PHP intentará cargar la clase con la siguiente función que se haya registrado con spl_autoload_register.

                Si no hay más funciones registradas, PHP lanzará un error.

                Si la función devuelve true, PHP no intentará cargar la clase con ninguna otra función.

                Si la clase no existe, PHP lanzará un error.

            </p>


        </section>

        <section class="mb-5" id="creandoUnAutoloader">
            <h2>Creando un autoloader</h2>

            <p>
                Para crear un autoloader, debemos crear una función que reciba como parámetro el nombre de la clase que se quiere cargar.

                Esta función debe cargar el fichero que contiene la clase.

                Si la clase no existe, la función debe devolver false.

                Si la clase existe, la función debe devolver true.

                Si la función devuelve false, PHP intentará cargar la clase con la siguiente función que se haya registrado con spl_autoload_register.

                Si no hay más funciones registradas, PHP lanzará un error.

                Si la función devuelve true, PHP no intentará cargar la clase con ninguna otra función.

                Si la clase no existe, PHP lanzará un error.

            </p>

            <pre class="bg-dark text-light p-2">
                <code>
                    function miAutoloader($nombreClase) {
                        $ruta = "lib/$nombreClase.php";
                        if (file_exists($ruta)) {
                            require $ruta;
                            return true;
                        } else {
                            return false;
                        }
                    }

                    spl_autoload_register('miAutoloader');
                </code>

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