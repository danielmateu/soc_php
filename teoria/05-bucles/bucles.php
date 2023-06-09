<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="d-flex flex-col justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Bucles</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around">
            <a href="#for">for</a>
            <a href="#while">while</a>
            <a href="#doWhile">do while</a>
            <a href="#forEach">for each</a>
        </nav>
        <!-- Boton para cambio de modo -->

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">
        <section class="mb-5" id="for">
            <h2>For</h2>

            <p>
                El bucle for es un bucle determinado, es decir, se sabe de antemano el número de veces que se va a ejecutar.
            </p>

            <p>
                La sintaxis del bucle for es la siguiente:
            </p>

            <pre class="bg-dark text-white p-2 rounded rounded">
                <code>
                    for (inicialización; condición; incremento) {
                        // código a ejecutar
                    }
                </code>
            </pre>

            <p>
                La inicialización se ejecuta una sola vez, al principio del bucle. La condición se evalúa antes de cada iteración del bucle. Si la condición es verdadera, se ejecuta el código del bucle. Si es falsa, se sale del bucle. El incremento se ejecuta al final de cada iteración del bucle.

                El siguiente ejemplo muestra un bucle for que muestra los números del 1 al 10:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    for ($i = 1; $i <= 10; $i++) {
                        echo $i;
                    }
                </code>

            </pre>

            <p>
                El bucle for se puede utilizar para recorrer un array. En el siguiente ejemplo se muestra un bucle for que recorre un array de números y muestra cada uno de ellos:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $numeros = array(1, 2, 3, 4, 5);

                    for ($i = 0; $i < count($numeros); $i++) {
                        echo $numeros[$i];
                    }
                </code>

            </pre>

            <p>
                El bucle for se puede utilizar para recorrer un array asociativo. En el siguiente ejemplo se muestra un bucle for que recorre un array asociativo de nombres y muestra cada uno de ellos:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $nombres = array("Juan" => "García", "María" => "Martínez", "Ana" => "Fernández");

                    foreach ($nombres as $nombre => $apellido) {
                        echo $nombre . " " . $apellido;
                    }
                </code>

            </pre>

            <p>
                El bucle for se puede utilizar para recorrer un array multidimensional. En el siguiente ejemplo se muestra un bucle for que recorre un array multidimensional de nombres y muestra cada uno de ellos:
            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $nombres = array(
                        array("Juan", "García"),
                        array("María", "Martínez"),
                        array("Ana", "Fernández")
                    );

                    for ($i = 0; $i < count($nombres); $i++) {
                        for ($j = 0; $j < count($nombres[$i]); $j++) {
                            echo $nombres[$i][$j];
                        }
                    }
                </code>

            </pre>

        </section>

        <section class="mb-5" id="while">
            <h2>While</h2>

            <p>
                El bucle while es un bucle indeterminado, es decir, no se sabe de antemano el número de veces que se va a ejecutar.
            </p>

            <p>
                La sintaxis del bucle while es la siguiente:
            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    while (condición) {
                        // código a ejecutar
                    }
                </code>
            </pre>

            <p>
                La condición se evalúa antes de cada iteración del bucle. Si la condición es verdadera, se ejecuta el código del bucle. Si es falsa, se sale del bucle.

                El siguiente ejemplo muestra un bucle while que muestra los números del 1 al 10:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $i = 1;

                    while ($i <= 10) {
                        echo $i;
                        $i++;
                    }
                </code>
            </pre>

            <p>
                El bucle while se puede utilizar para recorrer un array. En el siguiente ejemplo se muestra un bucle while que recorre un array de números y muestra cada uno de ellos:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $numeros = array(1, 2, 3, 4, 5);

                    $i = 0;

                    while ($i < count($numeros)) {
                        echo $numeros[$i];
                        $i++;
                    }
                </code>

            </pre>

        </section>


        <section class="mb-5" id="doWhile">
            <h2>Do While</h2>

            <p>
                El bucle do while es un bucle indeterminado, es decir, no se sabe de antemano el número de veces que se va a ejecutar.
            </p>

            <p>
                La sintaxis del bucle do while es la siguiente:
            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    do {
                        // código a ejecutar
                    } while (condición);
                </code>
            </pre>

            <p>
                La condición se evalúa al final de cada iteración del bucle. Si la condición es verdadera, se ejecuta el código del bucle. Si es falsa, se sale del bucle.

                El siguiente ejemplo muestra un bucle do while que muestra los números del 1 al 10:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $i = 1;

                    do {
                        echo $i;
                        $i++;
                    } while ($i <= 10);
                </code>

            </pre>

            <p>
                El bucle do while se puede utilizar para recorrer un array. En el siguiente ejemplo se muestra un bucle do while que recorre un array de números y muestra cada uno de ellos:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $numeros = array(1, 2, 3, 4, 5);

                    $i = 0;

                    do {
                        echo $numeros[$i];
                        $i++;
                    } while ($i < count($numeros));
                </code>

            </pre>

        </section>
        <section class="mb-5" id="forEach">
            <h2>For Each</h2>

            <p>
                El bucle foreach se utiliza para recorrer arrays. La sintaxis del bucle foreach es la siguiente:
            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    foreach ($array as $valor) {
                        // código a ejecutar
                    }
                </code>

            </pre>

            <p>
                El bucle foreach recorre el array y en cada iteración asigna el valor del elemento actual a la variable $valor. El bucle foreach finaliza cuando se han recorrido todos los elementos del array.

                El siguiente ejemplo muestra un bucle foreach que recorre un array de números y muestra cada uno de ellos:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $numeros = array(1, 2, 3, 4, 5);

                    foreach ($numeros as $numero) {
                        echo $numero;
                    }
                </code>

            </pre>

            <p>
                El bucle foreach se puede utilizar para recorrer un array multidimensional. En el siguiente ejemplo se muestra un bucle foreach que recorre un array multidimensional de nombres y muestra cada uno de ellos:

            </p>

            <pre class="bg-dark text-white p-2 rounded">
                <code>
                    $nombres = array(
                        array("Juan", "García"),
                        array("María", "Martínez"),
                        array("Ana", "Fernández")
                    );

                    foreach ($nombres as $nombre) {
                        foreach ($nombre as $valor) {
                            echo $valor;
                        }
                    }
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