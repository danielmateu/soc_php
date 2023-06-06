<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bifurcaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">

</head>

<body class="container p-4 position-relative">

    <header class="d-flex flex-col justify-content-center bg-dark  p-2 mb-4 border-bottom position-sticky top-0 start-0  col-12" id="menu">
        <h1 class="col-6 text-white">Bifurcaciones</h1>
        <nav class="navbar navbar-expand-lg navbar-dark col-6 d-flex justify-content-around">
            <a href="#if">if</a>
            <a href="#ifelse">if-else</a>
            <a href="#switch">switch</a>
            <a href="#operadorTernario">operador ternario</a>
            <a href="#operadorNull">operador ??</a>
        </nav>
        <!-- Boton para cambio de modo -->

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>
        
    </header>


    <p>En PHP tenemos estructuras de control de flujo que nos
        permiten implementar las estructuras básicas de programación,
        que son:</p>

    <ul>
        <li>Secuencias</li>
        <li>Selecciones</li>
        <li>Bucles</li>
    </ul>

    <h2>Bifurcaciones</h2>

    <p>Para las bifurcaciones usaremos if, if con else, elseif o switch
        según las necesidades, siguiendo la misma sintaxis que en
        JavaScript, Java o C.</p>

    <!-- <h3 id="if">if</h3> -->
    <h3 id="if">if</h3>

    <p>La estructura if es la más básica de las bifurcaciones, y se
        utiliza para ejecutar un bloque de código si se cumple una
        condición.</p>

    <p>La sintaxis es la siguiente:</p>

    <pre>
        if (condición) {
            // código a ejecutar si se cumple la condición
        }

        // Ejemplo
        $edad = 18;
        if ($edad >= 18) {
            echo "Eres mayor de edad";
        }

    </pre>

    <h3 id="ifelse">if con else</h3>

    <p>La estructura if con else se utiliza para ejecutar un bloque de
        código si se cumple una condición, y otro bloque de código si no
        se cumple la condición.</p>

    <p>La sintaxis es la siguiente:</p>

    <pre>
        if (condición) {
            // código a ejecutar si se cumple la condición
        } else {
            // código a ejecutar si no se cumple la condición
        }

        // Ejemplo
        $edad = 18;
        if ($edad >= 18) {
            echo "Eres mayor de edad";
        } else {
            echo "Eres menor de edad";
        }

    </pre>

    <h3 id="switch">Switch</h3>

    <p>La estructura switch se utiliza para ejecutar un bloque de código
        según el valor de una variable.</p>

    <p>La sintaxis es la siguiente:</p>

    <pre>
        switch (variable) {
            case valor1:
                // código a ejecutar si la variable tiene el valor1
                break;
            case valor2:
                // código a ejecutar si la variable tiene el valor2
                break;
            default:
                // código a ejecutar si la variable no tiene ninguno de los valores anteriores
        }

        // Ejemplo
        $dia = 1;
        switch ($dia) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "No es un día de la semana";
        }

    </pre>

    <h3 id="operadorTernario">Operador ternario</h3>

    <p>El operador ternario es una forma abreviada de escribir una
        estructura if con else.</p>

    <p>La sintaxis es la siguiente:</p>

    <pre>
        condición ? código a ejecutar si se cumple la condición : código a ejecutar si no se cumple la condición

        // Ejemplo
        $edad = 18;
        echo $edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad";

    </pre>

    <h3 id="operadorNull">Operador ??</h3>

    <p>El operador ?? es una forma abreviada de escribir una estructura
        if con else, pero solo para comprobar si una variable tiene un
        valor o no.</p>

    <p>La sintaxis es la siguiente:</p>

    <pre>
        variable ?? valor por defecto

        // Ejemplo
        $nombre = $_GET['nombre'] ?? "No se ha recibido el nombre";

    </pre>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor

    </footer>

    <script src="./index.js"></script>
</body>

</html>