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

        <p>Prueba las siguientes funciones para trabajar con arrays</p>

        <ul class="">
            <li>
                <a href="#implode">implode</a>
            </li>
            <li>
                <a href="#shuffle">shuffle</a>
            </li>
            <li>
                <a href="#array_unshift">array_unshift</a>
            </li>
            <li>
                <a href="#array_splice">array_splice</a>
            </li>
            <li>
                <a href="#array_slice">array_slice</a>
            </li>
            <li>
                <a href="#array_reverse">array_reverse</a>
            </li>
            <li>
                <a href="#array_replace">array_replace</a>
            </li>
            <li>
                <a href="#array_push">array_push</a>
            </li>
            <li>
                <a href="#array_pop">array_pop</a>
            </li>
            <li>
                <a href="#array_pad">array_pad</a>
            </li>
            <li>
                <a href="#array_flip">array_flip</a>
            </li>
            <li>
                <a href="#array_change_key_case">array_change_key_case</a>
            </li>
            <li>
                <a href="#sizeof">sizeof</a>
            </li>
        </ul>
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


    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="./index.js"></script>

</body>

</html>