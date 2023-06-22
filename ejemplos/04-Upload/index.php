<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres de Fichero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Nombres de Fichero</h1>

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="ejemplo">
            <form method="post" enctype="multipart/form-data" action="upload.php" class="form mb-4">
                <div>
                    <label for="file-with-preview">Sube tu imagen de perfil</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1250000000" class="form-control">
                    <input type="file" name="fichero" id="file-with-preview" class="form-control" accept=".jpg, .jpeg, .gif, .png">
                </div>

                <br>

                <input type="submit" value="Enviar" class="btn btn-primary">
            </form>

            <figure>
                <img src="./imagenes/default-image.png" alt="default image" id="preview-image" class="img-fluid rounded">
            </figure>


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