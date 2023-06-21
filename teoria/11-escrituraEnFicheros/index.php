<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritura en Ficheros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">Escritura en Ficheros</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#escrituraEnFicheros">Escritura en Ficheros</a>
            <a href="#fprint">fprint()</a>
            <a href="#file_put_contents">file_put_contents()</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2" id='escrituraEnFicheros'>

        <section class="mb-5">
            <h2>Escritura en ficheros</h2>

            <p>De la misma forma que tenemos funciones para leer datos de ficheros, tambien tenemos otras para escribir en ellos</p>

            <div class="alert alert-primary d-flex flex-column justify-content-center align-items-center">

                <table class="table table-striped table-hover table-bordered ">
                    <thead>
                        <tr>
                            <th>Función</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>fwrite()</td>
                            <td>Escribe en un fichero</td>
                        </tr>
                        <tr>
                            <td>fputs()</td>
                            <td>Escribe en un fichero</td>
                        </tr>
                        <tr>
                            <td>fputcsv()</td>
                            <td>Escribe en un fichero en formato CSV</td>
                        </tr>
                        <tr>
                            <td>file_put_contents()</td>
                            <td>Escribe en un fichero</td>
                        </tr>
                        <tr>
                            <td>file_put_contents()</td>
                            <td>Escribe en un fichero</td>
                        </tr>
                        <tr>
                            <td>file_put_contents()</td>
                            <td>Escribe en un fichero</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>La función <code>fwrite()</code> es la más utilizada para escribir en ficheros. Su sintaxis es la siguiente:</p>

            <pre class="bg-dark text-white p-2">
                <code>
                    fwrite($fichero, $contenido, $longitud);
                </code>

            </pre>

            <p>Donde:</p>

            <ul>
                <li><code>$fichero</code> es el fichero en el que se va a escribir</li>
                <li><code>$contenido</code> es el contenido que se va a escribir</li>
                <li><code>$longitud</code> es la longitud del contenido que se va a escribir. Si no se especifica, se escribirá todo el contenido</li>

            </ul>

            <h3>Ejemplo: </h3>

            <pre class="bg-dark text-white p-2">
                <code>
                    $fichero = fopen("fichero.txt", "w");
                    fwrite($fichero, "Hola Mundo");
                    fclose($fichero);
                </code>

            </pre>

            <p>En este ejemplo, se abre el fichero <code>fichero.txt</code> en modo escritura, se escribe el texto <code>Hola Mundo</code> y se cierra el fichero</p>

            <p>Si el fichero no existe, se crea</p>

            <p>Si el fichero existe, se sobreescribe</p>

            <?php
            // Abrimos el fichero para la escritura
            $fichero = fopen("./textos/cuento.txt", "w");

            // Escribimos en el fichero
            fwrite($fichero, "Erase una vez un rey que tenía tres hijas, todas ellas muy hermosas, pero la menor era la más bella de todas. Cerca del castillo del rey había un gran bosque, y en el bosque, bajo un viejo tilo, había una fuente. Cuando hacía mucho calor, las tres princesas iban al bosque y se sentaban junto a la fuente, y se peinaban y se divertían.");

            // Cerramos el fichero
            fclose($fichero);

            echo "<p>Se ha escrito el fichero <code>cuento.txt</code> en la carpeta <code>textos</code></p>";

            ?>

        </section>

        <section class="mb-5" id="fprint">
            <h2>Función fprintf()</h2>

            <p>La función <code>fprintf()</code> es similar a <code>fwrite()</code> pero permite dar formato al texto que se va a escribir</p>

            <p>Su sintaxis es la siguiente:</p>

            <pre class="bg-dark text-white p-2">
                <code>
                    fprintf($fichero, $formato, $contenido, $longitud);
                </code>

            </pre>

            <p>Donde:</p>

            <ul>
                <li><code>$fichero</code> es el fichero en el que se va a escribir</li>
                <li><code>$formato</code> es el formato que se va a aplicar al contenido</li>
                <li><code>$contenido</code> es el contenido que se va a escribir</li>
                <li><code>$longitud</code> es la longitud del contenido que se va a escribir. Si no se especifica, se escribirá todo el contenido</li>

            </ul>

            <h3>Ejemplo: </h3>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input required type="text" name="nombre" id="nombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input required type="number" name="edad" id="edad" class="form-control">
                </div>

                <!-- Telefono -->
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input required type="tel" name="telefono" id="telefono" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" name="email" id="email" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" name="guardar">
            </form>

            <?php
            // Si llega el formulario
            if (!empty($_POST['guardar'])) {

                // Recuperamos los valores del formulario
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];

                // Abrimos el fichero para la escritura
                $fichero = fopen("./data/data.txt", "a");

                // Escribimos en el fichero sin sobreescrbir
                fprintf($fichero, "\n%s %d %s", $nombre, $edad, $telefono, $email);
                // fprintf($fichero, "\n%s %d %s", $nombre, $edad, $telefono, $email);

                // Creamos JSON 
                // $json = json_encode($_POST);

                // Escribimos en el fichero sin sobreescrbir
                // fprintf($fichero, "\n%s", $json);

                // Cerramos el fichero
                fclose($fichero);

                echo "<p>Se ha escrito el fichero <code>data.txt</code> en la carpeta <code>data</code></p>";
            }
            ?>

        </section>

        <section class="mb-5" id="file_put_contents"></section>

        <section class="mb-5" id="fputscsv">
            <h2>Escritura en CSV</h2>

            <p>La función <code>fputcsv()</code> es similar a <code>fprintf()</code> pero permite dar formato al texto que se va a escribir</p>

            <p>Su sintaxis es la siguiente:</p>

            <pre class="bg-dark text-white p-2">
                <code>
                    fputcsv($fichero, $contenido, $separador, $comillas);
                </code>

            </pre>

            <p>Donde:</p>

            <ul>
                <li><code>$fichero</code> es el fichero en el que se va a escribir</li>
                <li><code>$contenido</code> es el contenido que se va a escribir</li>
                <li><code>$separador</code> es el separador de campos</li>
                <li><code>$comillas</code> es el carácter de comillas</li>

            </ul>

            <h3>Ejemplo: </h3>

            <?php

            // Recuperamos los valores del formulario
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];

            // Abrimos el fichero para la escritura
            $fichero = fopen("./data/data.csv", "a");

            // Escribimos en el fichero sin sobreescrbir
            fputcsv($fichero, $_POST);

            // Cerramos el fichero
            fclose($fichero);

            echo "<p>Se ha escrito el fichero <code>data.csv</code> en la carpeta <code>data</code></p>";

            ?>
        </section>

        <section class="mb-5" id="serializacion">
            <h2>Guardar y recuperar objetos en un fichero: Serialización</h2>

            <p>La serialización es el proceso de convertir un objeto en una secuencia de bytes para almacenarlo en un fichero, en una base de datos o para transmitirlo a través de una red.</p>

            <p>La deserialización es el proceso inverso, es decir, convertir una secuencia de bytes en un objeto.</p>

            <p>PHP proporciona dos funciones para serializar y deserializar objetos:</p>

            <ul>
                <li><code>serialize()</code>: serializa un objeto</li>
                <li><code>unserialize()</code>: deserializa un objeto</li>
            </ul>

            <!-- <h3>Ejemplo: </h3>

            <?php

            ?> -->

        </section>

        <section class="mb-5" id="ficherosPuntoIni">
            <h2>Ficheros .ini</h2>

            <p>Cómo recuperar información desde
                ficheros de configuración .ini en PHP</p>

            <p>La función <code>parse_ini_file()</code> permite recuperar la información de un fichero .ini</p>

            <p>Su sintaxis es la siguiente:</p>

            <pre class="bg-dark text-white p-2">
                <code>
                    parse_ini_file($fichero, $secciones);
                </code>

            </pre>

            <p>Donde:</p>

            <ul>
                <li><code>$fichero</code> es el fichero .ini</li>
                <li><code>$secciones</code> es un booleano que indica si se devuelven las secciones del fichero</li>

            </ul>

            <p>La funcion <code>parse_ini_string()</code>
                permite recuperar la información de un fichero .ini desde una cadena</p>
            </p>

            <p>Su sintaxis es la siguiente:</p>

            <pre class="bg-dark text-white p-2">
                <code>
                    parse_ini_string($cadena, $secciones);
                </code>

            </pre>

            <p>Donde:</p>

            <ul>
                <li><code>$cadena</code> es la cadena que contiene el fichero .ini</li>
                <li><code>$secciones</code> es un booleano que indica si se devuelven las secciones del fichero</li>
        </section>

        <section class="mb-5" id="otrasOperaciones">
            <h2>Otras operaciones</h2>

            <p>Otras operaciones útiles para trabajar
                con ficheros</p>

            <p>Podemos copiar, renombrar y borrar ficheros con las siguientes
                funciones:</p>

            <ul>
                <li><code>copy()</code>: copia un fichero</li>
                <li><code>rename()</code>: renombra un fichero</li>
                <li><code>unlink()</code>: borra un fichero</li>

            </ul>


        </section>

        <section class="mb-5" id="directoriosYEnlaces">
            <p>También podemos crear y eliminar directorios y crear enlaces
                simbólicos (Linux).</p>

            <ul>
                <li><code>mkdir()</code>: crea un directorio</li>
                <li><code>rmdir()</code>: borra un directorio</li>
                <li><code>symlink()</code>: crea un enlace simbólico</li>

            </ul>
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