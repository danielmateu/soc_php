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

    <header class="d-flex justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Funciones</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around no-wrap">
            <a href="#introFunciones">Intro</a>
            <a href="#creandoFunciones">creando</a>
            <a href="#probandoFunciones">probando</a>
            <a href="#pasoDeParametros">paso de parametros</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="introFunciones">
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

        <section class="mb-5" id="creandoFunciones">
            <h2>Creando Funciones</h2>
            <p>
                Para crear nuestras propias funciones, será muy importante definir
                de forma clara:
            </p>

            <ul>
                <li>El nombre de la función</li>
                <li>Los parámetros de entrada</li>
                <li>El valor devuelto</li>
                <li>Debe lanzar erroes/excepciones?</li>
            </ul>

            <p>también será importante documentarla</p>

            <p>
                <a href="http://php.net/manual/es/language.functions.php" target="_blank">Documentación oficial</a>
            </p>

            <p>
                La difinición de una función se realiza mediante la palabra reservada <code>function</code> seguida del nombre de la función
                y los parámetros entre paréntesis separados por comas.
            </p>

        </section>

        <section class="mb-5" id="probandoFunciones">
            <h2>Probando Funciones</h2>

            <p>
                Para probar nuestras funciones, podemos usar el siguiente código:
            </p>

            <pre class="bg-dark text-white p-2">
                <code>
                &lt;?php
                // Incluimos el fichero con la definición de la función
                include 'funciones.php';
                // Llamamos a la función
                $resultado = suma(2, 3);
                // Mostramos el resultado
                echo $resultado;
                    ?&gt;
                </code>
            </pre>

        </section>

        <section class="mb-5" id="implicacionDeTipos">
            <h2>Implicacion de Tipos</h2>

            <p>
                En PHP, los tipos de datos de los parámetros y el tipo de dato
                devuelto no se declaran, pero si se pueden especificar en la
                documentación.
            </p>

            <p>
                En la definición de la función, podemos indicar el tipo de dato
                qué se espera recibir en cada parámetro, y el tipo de dato que
                se devolverá.
            </p>

            <p>
                <a href="http://php.net/manual/es/functions.arguments.php#functions.arguments.type-declaration" target="_blank">Documentación oficial</a>
            </p>

            <p>

                En algunos casos, querremos hacer cosas más avanzadas, como
                las que se muestran a continuación:

                Recibir como parámetro un objeto de un tipo concreto o NULL.

            <pre>
                    <code>
                        function foo(?Foo $foo) {
                            // ...
                        }
                    </code>
                </pre>

            Permitir que un parámetro pueda ser de distintos tipos (PHP8+).

            <pre>
                    <code>
                        function foo(Foo|Bar $input) {
                            // ...
                        }
                    </code>
                </pre>

            Obligar a un parámetro cumplir con varias interfaces (PHP8.1+).

            <pre>
                    <code>
                        function foo(Foo&Bar $input) {
                            // ...
                        }
                    </code>
                </pre>
            <p>


        </section>

        <section class="mb-5" id="pasoDeParametros">
            <h2>Paso de parámetros</h2>

            <p>
                En PHP, los parámetros se pasan por valor, es decir, se crea una copia
                del valor del parámetro en una nueva variable, que es la que se usa
                dentro de la función.

                Si se modifica el valor de la variable dentro de la función, no se
                modifica el valor de la variable original.
            </p>

            <p>
                <a href="http://php.net/manual/es/language.references.pass.php" target="_blank">Documentación oficial</a>

            </p>

            <p>
                Para pasar un parámetro por referencia, se debe anteponer el símbolo
                <code>&</code> al nombre del parámetro en la definición de la función.
            </p>


            <p>
                <a href="http://php.net/manual/es/language.references.pass.php" target="_blank">Documentación oficial</a>
            </p>

            <p>
                Los objetos son pasados siempre por referencia. En este caso,
                no podemos elegir.
            </p>

            <p>
                Un caso curioso es el de los arrays, que en PHP se pasan por
                valor, aunque podemos indicar con el operador & si los queremos
                por referencia.
            </p>
        </section>

        <section class="mb-5" id="valorDeRetorno">
            <h2>Valor de retorno</h2>

            <p>
                En PHP, el valor de retorno de una función se especifica con la
                palabra reservada <code>return</code>.

                Si no se especifica un valor de retorno, la función devolverá
                <code>NULL</code>.
            </p>

            <p>
                Solamente se puede retornar un único valor.

                Si queremos retornar más de un valor, podemos retornar un objeto o
                un array que contenga toda la información deseada.

                Si la función puede devolver NULL, se indicará colocando un signo de
                interrogación delante del tipo de retorno (PHP 7.1+).
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