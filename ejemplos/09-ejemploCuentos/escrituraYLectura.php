<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Cuentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Ejemplo Cuentos</h1>

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="ejemploCuento">

            <h2 class='text-center'>Ejemplo Cuentos</h2>

            <p>Aplicación que guarda y recupera
                cuentos mediante ficheros de texto</p>

            <p>Escribe tu cuento</p>

            <form action="" method="POST" class="
                d-flex gap-2 flex-column justify-content-center  rounded
            ">
                <label for="nombre">Nombre del fichero</label>
                <input type="text" name="nombre" required id="nombre" class="p-2" placeholder="Nombre del cuento">
                <label for="cuento">Cuento</label>
                <textarea name="cuento" id="cuento" cols="30" rows="10" required placeholder="Escribe tu cuento" class="p-2"></textarea>

                <input type="submit" value="Guardar" name="guardar" class="btn btn-primary">

            </form>

        </section>

        <?php
        // Si llega el cuento por POST
        if (isset($_POST['guardar'])) {

            // Guarda el cuento en un fichero de texto
            file_put_contents(
                './cuentos/' . $_POST['nombre'] . '.txt',
                $_POST['cuento']
            );
        }

        // Lee los ficheros de la carpeta cuentos
        $cuentos = scandir('./cuentos');

        $lista = [];
        // Muestra los cuentos
        foreach ($cuentos as $cuento) {
            if (preg_match('/.txt$/i', $cuento)) {
                $lista[] = $cuento;
            }
        }

        // ordena los ficheros txt alfabeticamente
        sort($lista);
        ?>

        <h2>Muestra los cuentos</h2>

        <form action="" method="POST" class="d-flex gap-2 flex-column justify-content-center  rounded" ">
            <label for=" cuento">Selecciona el cuento:</label>
            <select name="cuento" id="cuento" class="p-2">
                <?php
                foreach ($lista as $cuento) {
                    echo "<option value='$cuento'>$cuento</option>";
                }
                ?>
            </select>
            <input type="submit" name="" id="" value="Ver cuento" class="btn btn-info">
        </form>

        <?php
        // Si llega el cuento por POST
        if (isset($_POST['cuento'])) {

            $cuento = $_POST['cuento'];
            // Muestra el cuento
            echo "<h2>$cuento</h2>";

            echo "<p>" . file_get_contents("./cuentos/$cuento") . "</p>";
        }
        ?>


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