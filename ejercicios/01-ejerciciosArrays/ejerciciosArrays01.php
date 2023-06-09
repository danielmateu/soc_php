<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Arrays 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container position-relative">
    <header class="position-sticky top-0 start-0 header p-4 mt-4 rounded">
        <h1>Ejercicios Arrays 01</h1>

        <!-- <p>Prueba las siguientes funciones para trabajar con arrays</p> -->

        <div class="d-flex justify-content-between">
            <div class='d-flex flex-column'>
                <a href="#implode">implode</a>
                <a href="#shuffle">shuffle</a>
                <a href="#array_unshift">array_unshift</a>
                <a href="#array_splice">array_splice</a>
            </div>

            <div class='d-flex flex-column'>
                <a href="#array_slice">array_slice</a>
                <a href="#array_reverse">array_reverse</a>
                <a href="#array_replace">array_replace</a>
                <a href="#array_push">array_push</a>
            </div>

            <div class='d-flex flex-column'>
                <a href="#array_pop">array_pop</a>
                <a href="#array_pad">array_pad</a>
                <a href="#array_flip">array_flip</a>
                <a href="#array_change_key_case">array_change_key_case</a>
                <a href="#sizeof">sizeof</a>
            </div>
        </div>

        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>



    </header>

    <?php
    echo "<hr>";
    ?>
    <section id="implode">
        <h2>Método implode</h2>

        <p>Convierte un array en un string</p>

        <pre class="bg-dark text-light p-2 rounded">
            $array = array('lastname', 'email', 'phone');
            $comma_separated = implode(",", $array);

            echo $comma_separated; // lastname,email,phone
        </pre>

        <?php
        $array = array('lastname', 'email', 'phone');
        $comma_separated = implode(", ", $array);

        echo $comma_separated; // lastname,email,phone

        // Empty string when using an empty array:

        // var_dump(implode('hello', array())); // string(0) ""

        echo "<hr>";
        ?>

    </section>

    <section id="shuffle">
        <h2>Método shuffle</h2>

        <p>Desordena los elementos de un array</p>

        <p>Devuelve
        <ul>
            <li>TRUE en caso de éxito</li>
            <li>FALSE en caso de error</li>
        </ul>
        </p>

        <pre class="bg-dark text-light p-2 rounded">
            $numbers = range(1, 20);
            shuffle($numbers);
            foreach ($numbers as $number) {
                echo "$number ";
            }
        </pre>

        <?php
        $numbers = range(1, 20);
        shuffle($numbers);
        foreach ($numbers as $number) {
            // echo "$number, ";
            // En el último elemento no añade la coma
            echo "$number, ";
        }

        echo "<hr>";
        ?>
    </section>

    <section id="array_unshift">
        <h2>Método array_unshift</h2>

        <p>Añade uno o más elementos al principio de un array</p>

        <pre class="bg-dark text-light p-2 rounded">
            $queue = array("orange", "banana");
            array_unshift($queue, "apple", "raspberry");
            print_r($queue);
        </pre>

        <?php
        $queue = array("orange", "banana");
        array_unshift($queue, "apple", "raspberry");

        print_r($queue);

        echo "<hr>";
        ?>

    </section>

    <section id="array_splice">
        <h2>Método array_splice</h2>

        <p>Elimina elementos de un array y los reemplaza con otros nuevos</p>

        <pre class="bg-dark text-light p-2 rounded">
            $input = array("red", "green", "blue", "yellow");
            array_splice($input, 2);
            // $input is now array("red", "green")

            $input = array("red", "green", "blue", "yellow");
            array_splice($input, 1, -1);
            // $input is now array("red", "yellow")

            $input = array("red", "green", "blue", "yellow");
            array_splice($input, 1, count($input), "orange");
            // $input is now array("red", "orange")
        </pre>

        <?php
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 2);
        // $input is now array("red", "green")

        echo "<pre>";
        print_r($input);
        echo "</pre>";

        $input = array("red", "green", "blue", "yellow");

        array_splice($input, 1, -1);
        // $input is now array("red", "yellow")

        echo "<pre>";
        print_r($input);
        echo "</pre>";
        ?>
    </section>

    <section id="array_slice">
        <h2>Método array-slice</h2>

        <p>El método array_slice devuelve la secuencia de elementos del array tal y como se especifica en los parámetros offset y length. Devuelve la parte del array. Si el índice es mayor que el tamaño del array, devuelve un array vacío.</p>

        <pre class="bg-dark text-light p-2 rounded">
        $entrada = array("a", "b", "c", "d", "e");

        $salida = array_slice($entrada, 2);      // devuelve "c", "d", y "e"
        $salida = array_slice($entrada, -2, 1);  // devuelve "d"
        $salida = array_slice($entrada, 0, 3);   // devuelve "a", "b", y "c"

        // observe las diferencias en las claves de los arrays
        print_r(array_slice($entrada, 2, -1));
        print_r(array_slice($entrada, 2, -1, true));
        </pre>

        <?php
        $entrada = ['Dani', 'Silvia', 'Nuk'];
        $salida = array_slice($entrada, 2);

        print_r($salida)



        ?>

    </section>

    <section id="array_reverse">
        <h2>Método array_reverse</h2>

        <p>Toma un valor array y devuelve un nuevo array con el orden de los elementos invertido. Devuelve el array en orden inverso.</p>

        <pre class="bg-dark text-light p-2 rounded">
        $input  = array("php", 4.0, array("verde", "rojo"));
        $reversed = array_reverse($input);
        $preserved = array_reverse($input, true);

        print_r($input);
        print_r($reversed);
        print_r($preserved);
        </pre>

        <?php
        $input  = array("php", 4.0, array("verde", "rojo"));

        $reversed = array_reverse($input);
        $preserved = array_reverse($input, true);

        echo "<pre>";
        print_r($input);
        print_r($reversed);

        print_r($preserved);
        echo "</pre>";
        ?>



    </section>


    <section id="array_replace">
        <h2>Método array_replace</h2>

        <p>Reemplaza los elementos del array original con elementos de array adicionales</p>

        <pre class="bg-dark text-light p-2 rounded">
    $base = array("naranja", "plátano", "manzana", "frambuesa");
    $reemplazos = array(0 => "piña", 4 => "cereza");
    $reemplazo = array(0 => "grape");

    $resultado = array_replace($base, $reemplazos, $reemplazo);
    print_r($resultado);
        </pre>

        <?php
        $base = array("naranja", "plátano", "manzana", "frambuesa");
        $reemplazos = array(0 => "piña", 4 => "cereza");
        $reemplazo = array(0 => "grape");

        $resultado = array_replace($base, $reemplazos, $reemplazo);

        echo "<pre>";
        print_r($resultado);
        echo "</pre>";
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