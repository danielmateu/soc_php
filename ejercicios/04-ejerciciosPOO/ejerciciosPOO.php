<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Ejercicios POO</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#introPOO">Ejercicio 01</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="01-ejercicioClasePerro">

            <h2>Clase Perro 🐶</h2>

            <p>Crea una clase Perro con las siguientes propiedades: nombre, raza y peso.</p>

            <ul>
                <li>Añade un constructor para poder crear un perro a partir de tres
                    parámetros (nombre, raza y peso).</li>
                <li>Añade los métodos necesarios para que el perro engorde y ladre
                    (ladrar solamente es imprimir ‘GUAU’ sobre el documento).</li>
                <li>Añade un método __toString() para poder imprimir un perro.</li>
            </ul>

            <?php
            require_once '../../clases/Perro.php';

            $perro = new Perro('Nuk', 'Pastor Català', 10, 'marrón', 25, 'GUAU GUAU! 🐶');
            echo $perro;

            $perro->ladrar();
            $perro->engordar(5);
            echo $perro;



            ?>


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