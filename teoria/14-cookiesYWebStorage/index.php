<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies y WebStorage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Cookies y WebStorage</h1>
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
                Las cookies son pequeños archivos de texto que se almacenan en el
                ordenador del usuario cuando visita una página web. Su utilidad es
                que la web sea capaz de recordar su visita cuando vuelva a navegar
                por esa página. Las cookies suelen almacenar información de carácter
                técnico, preferencias personales, personalización de contenidos,
                estadísticas de uso, enlaces a redes sociales, acceso a cuentas de
                usuario, etc.
            </p>

            <p>
                El objetivo de la cookie es adaptar el contenido de la web a su
                perfil y necesidades, sin cookies los servicios ofrecidos por
                cualquier página se verían mermados notablemente.
            </p>

        </section>

        <section class="mb-5">
            <h2>Persistencia de datos</h2>

            

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