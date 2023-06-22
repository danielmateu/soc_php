<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamiento de errores y excepciones.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Tratamiento de errores y excepciones.</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#intro">Introducción</a>
            <a href="#erroresYExcepciones">Errores y Excepciones</a>
            <a href="#excepciones">Excepciones</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id='escrituraEnFicheros'>

        <section class="mb-5">
            <h2>Introducción</h2>

            <p>
                A lo largo de la ejecución de los programas, se pueden producir
                errores.

                Un error es una situación anómala en nuestra aplicación, que
                puede llevar a que el programa falle.
            </p>

            <p>
                Para evitar que el programa finalice de forma brusca e inesperada
                el programador debe gestionar los errores que se puedan
                producir.

            </p>

        </section>

        <section class="mb-5" id="erroresYExcepciones">
            <h2>Errores Y Excepciones</h2>

            <p>
                En PHP, los errores se gestionan mediante excepciones.
            </p>

            <p>
                Una excepción es una situación anómala en la ejecución de un
                programa, que puede llevar a que el programa falle.

                Cuando se produce una excepción, el programa lanza un objeto
                que contiene información sobre el error.

            </p>

            <p>
                Si el programador no gestiona la excepción, el programa finaliza
                de forma brusca e inesperada.

                Si el programador gestiona la excepción, el programa puede
                continuar su ejecución.
            </p>

        </section>

        <section class="mb-5" id="excepciones">
            <h2>Excepciones</h2>

            <p>
                En PHP, las excepciones se gestionan mediante bloques
                <code>try</code> y <code>catch</code>.
            </p>

            <p>
                El bloque <code>try</code> contiene el código que puede
                producir una excepción.

                El bloque <code>catch</code> contiene el código que se ejecuta
                cuando se produce una excepción.

                El bloque <code>catch</code> recibe como parámetro el objeto

                <code>Exception</code> que contiene información sobre el error.

                El bloque <code>catch</code> puede recibir como parámetro un objeto de una clase que herede de <code>Exception</code>.
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