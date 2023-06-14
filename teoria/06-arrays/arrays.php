<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="d-flex flex-col justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Arrays</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around">
            <a href="#indexados">Indexados</a>
            <a href="#asociativos">Asociativos</a>
            <a href="#multidimensionales">Multidimensionales.</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">
        <section class="mb-5" id="indexados">
            <h2>Arrays indexados</h2>

            <p>Un array indexado es aquel que tiene un índice numérico, es decir, que cada elemento del array tiene un número asociado.</p>

            <p>Para crear un array indexado podemos hacerlo de dos formas:</p>

            <ul>
                <li>Con la función <code>array()</code></li>
                <li>Con la sintaxis <code>[]</code></li>
            </ul>

            <p>Veamos un ejemplo de cada una de ellas:</p>

            <h3>Con la función <code>array()</code></h3>

            <p>Para crear un array indexado con la función <code>array()</code> debemos pasarle como parámetros los valores que queremos que tenga el array:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                </code>

            </pre>

            <p>En este caso, el array <code>$array</code> tendrá 5 elementos, con los valores <code>1, 2, 3, 4</code> y <code>5</code>.</p>

            <p>Si queremos acceder a un elemento del array, lo haremos mediante su índice, que es un número entero que empieza en 0 y termina en el número de elementos del array menos 1.</p>

            <p>Por ejemplo, para acceder al primer elemento del array <code>$array</code> haríamos lo siguiente:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    echo $array[0]; // Imprime 1
                </code>

            </pre>

            <p>Para acceder al último elemento del array <code>$array</code> haríamos lo siguiente:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    echo $array[4]; // Imprime 5
                </code>

            </pre>

            <p>Si intentamos acceder a un elemento del array que no existe, PHP nos mostrará un error:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    echo $array[5]; // Error: Undefined offset: 5
                </code>

            </pre>

            <p>Para añadir un elemento al final del array podemos usar la función <code>array_push()</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    array_push($array, 6);
                    echo $array[5]; // Imprime 6
                </code>

            </pre>

            <p>Para eliminar el último elemento del array podemos usar la función <code>array_pop()</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    array_pop($array);
                    echo $array[4]; // Error: Undefined offset: 4
                </code>

            </pre>

            <p>Para eliminar un elemento del array podemos usar la función <code>unset()</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    unset($array[2]);
                    echo $array[2]; // Error: Undefined offset: 2
                </code>

            </pre>

            <!-- <p>Para recorrer un array indexado podemos usar un bucle <code>for</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    for ($i = 0; $i < count($array); $i++) {
                        echo $array[$i];
                    }
                </code>

            </pre>

            <p>Para recorrer un array indexado podemos usar un bucle <code>foreach</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    foreach ($array as $elemento) {
                        echo $elemento;
                    }
                </code>

            </pre>

            <p>Para recorrer un array indexado podemos usar un bucle <code>while</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    $i = 0;
                    while ($i < count($array)) {
                        echo $array[$i];
                        $i++;
                    }
                </code>

            </pre>

            <p>Para recorrer un array indexado podemos usar un bucle <code>do-while</code>:</p>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(1, 2, 3, 4, 5);
                    $i = 0;
                    do {
                        echo $array[$i];
                        $i++;
                    } while ($i < count($array));
                </code>

            </pre> -->



        </section>

        <section class="mb-5" id="asociativos">
            <h2>Arrays asociativos</h2>

            <p>Un array asociativo es aquel que tiene un índice asociado a cada elemento del array.</p>

            <p>Para crear un array asociativo podemos hacerlo de dos formas:</p>

            <ul>
                <li>Con la función <code>array()</code></li>
                <li>Con la sintaxis <code>[]</code></li>

            </ul>

            <p>Veamos un ejemplo de cada una de ellas:</p>

            <h3>Con la función <code>array()</code></h3>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(
                        'nombre' => 'Juan',
                        'apellidos' => 'García',
                        'edad' => 25
                    );
                </code>

            </pre>

            <h3>Con la sintaxis <code>[]</code></h3>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = [
                        'nombre' => 'Juan',
                        'apellidos' => 'García',
                        'edad' => 25
                    ];
                </code>

            </pre>

            <p>Para acceder a un elemento del array asociativo podemos hacerlo de dos formas:</p>

            <ul>
                <li>Con la función <code>array()</code></li>
                <li>Con la sintaxis <code>[]</code></li>

            </ul>


            <p>Veamos un ejemplo de cada una de ellas:</p>

            <h3>Con la función <code>array()</code></h3>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(
                        'nombre' => 'Juan',
                        'apellidos' => 'García',
                        'edad' => 25
                    );

                    echo $array['nombre']; // Imprime Juan
                </code>

            </pre>

            <h3>Con la sintaxis <code>[]</code></h3>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = [
                        'nombre' => 'Juan',
                        'apellidos' => 'García',
                        'edad' => 25
                    ];

                    echo $array['nombre']; // Imprime Juan
                </code>

            </pre>

            <p>Para añadir un elemento al array asociativo podemos hacerlo de dos formas:</p>

            <ul>
                <li>Con la función <code>array_push()</code></li>
                <li>Con la sintaxis <code>[]</code></li>

            </ul>

            <p>Veamos un ejemplo de cada una de ellas:</p>

            <h3>Con la función <code>array_push()</code></h3>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = array(
                        'nombre' => 'Juan',
                        'apellidos' => 'García',
                        'edad' => 25
                    );

                    array_push($array, '');

                    echo $array['nombre']; // Imprime Juan
                </code>

            </pre>

            <h3>Con la sintaxis <code>[]</code></h3>

            <pre class="bg-dark text-light p-2">
                <code>
                    $array = [
                        'nombre' => 'Juan',
                        'apellidos' => 'García',
                        'edad' => 25
                    ];

                    $array[''] = '';

                    echo $array['nombre']; // Imprime Juan
                </code>

            </pre>

            <p>Para eliminar un elemento del array asociativo podemos hacerlo de dos formas:</p>



        </section>

        <section class="mb-5" id="multidimensionales">
            <h2>Arrays multidimensionales</h2>

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