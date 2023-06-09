<?php
include_once("../../helpers/helpers.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobador DNI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container position-relative">
    <header class=" header p-4 my-4 rounded d-flex">
        <h1>Comprobador DNI</h1>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 mt-1 me-3">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>
    </header>



    <section id="letraDni">

        <h2>Letra del DNI</h2>

        <p>Escribe un programa que indique si el DNI introducido es correcto</p>

        <form method="post" class="d-flex flex-column col-5">
            <label for="numero">Introduce el DNI</label>
            <input type="text" name="numero" id="numero" value="0">
            <input type="submit" value="Calcular" class="btn btn-primary mt-2">
        </form>

        <?php
        // Si se ha enviado el formulario
        $dni = $_POST['numero'];

        echo isDniValid($dni) ? "
        <div class='alert alert-success mt-2'>
            <h3>Resultado:</h3>
            <p>El DNI $dni es correcto</p>
        </div>" : "
        <div class='alert alert-danger mt-2'>
            <h3>Resultado:</h3>
            <p>El DNI $dni es incorrecto</p>
        </div>";


        ?>

    </section>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="./index.js"></script>

</body>

</html>