<?php
include_once("../../helpers/helpers.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="container position-relative">
    <header class=" header p-4 my-4 rounded d-flex flex-column position-sticky top-0 start-0">
        <h1>Ejercicios Funciones</h1>
        <!-- Boton para cambio de modo -->
        <div class="d-flex flex-column">
            <a href="#01-ejercicio">ejercicio 01</a>
            <a href="#02-ejercicio">ejercicio 02</a>
            <a href="#03-ejercicio">ejercicio 03</a>
            <a href="#04-ejercicio">ejercicio 04</a>
            <a href="#05-ejercicio">ejercicio 05</a>
            <a href="#06-ejercicio">ejercicio 06</a>
        </div>

        <div class="form-check form-switch position-absolute top-0 end-0 mt-1 me-3">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>
    </header>

    <section id="01-ejercicio" class="p-4">
        <h2>Calcula la resistencia eléctica</h2>

        <p>Haz una función que calcule la resistencia eléctrica de dos
            resistencias colocadas en paralelo.
        </p>

        <p>La fórmula de la resistencia eléctrica en paralelo es:</p>

        <p>R = 1 / (1/R1 + 1/R2)</p>

        <p>Donde R1 y R2 son las resistencias que se quieren calcular.</p>

        <p>La función debe recibir como parámetros las dos resistencias y devolver
            el resultado de la resistencia eléctrica.
        </p>

        <p>Prueba la función con las resistencias 4 y 6 y comprueba que el resultado
            es 2.4.

        </p>

        <p>Prueba la función con las resistencias 10 y 5 y comprueba que el resultado
            es 3.3333333333333.
        </p>

        <?php

        /**
         * Calcula la resistencia eléctica de dos resistencias colocadas en paralelo.
         *
         * @param float $r1
         * @param float $r2
         * @return float
         */

        function resistenciaElectrica(float $r1 = 0, float $r2 = 0): float
        {
            try {
                //code...
                $req = $r1 * $r2 / ($r1 + $r2);

                echo "<div class='alert alert-success mt-2'>
                <h3>Resultado:</h3>
                <p>La resistencia eléctrica de N resistencias colocadas en paralelo es: <strong>" . $req . "</strong></p>
                </div>";
                return $req;
            } catch (Error $e) {
                //throw $th;
                echo "<div class='alert alert-danger'>
                <p><strong>Error</strong> en la operación </p>
                </div>";
                return 0;
            }
        }

        resistenciaElectrica(4, 6);
        resistenciaElectrica(10, 20);
        resistenciaElectrica(0, 0);

        ?>


    </section>

    <section id="02-ejercicio" class="p-4">
        <h2>Calcula la resistencia eléctica con N resistencias</h2>

        <p>Crea una segunda función que te permita calcular la resistencia en
            paralelo de N resistencias. Utiliza un número de parámetros
            variable.</p>

        <p>Prueba la función con las resistencias 4, 6 y 8 y comprueba que el
            resultado es 2.4.</p>

        <p>Prueba la función con las resistencias 10, 5 y 2 y comprueba que el
            resultado es 1.2121212121212.</p>


        <p>
            La fórmula de la resistencia eléctrica en paralelo es:

            R = 1 / (1/R1 + 1/R2 + 1/R3 + ... + 1/RN)

            Donde R1, R2, R3, ... y RN son las resistencias que se quieren calcular.
        </p>

        <?php

        /**
         * Calcula la resistencia eléctica de N resistencias colocadas en paralelo.
         *
         * @param float ...$resistencias
         * @return float
         */

        function resistenciasParalelo(float ...$resistencias): float
        {

            try {
                //code...
                $resultado = 0;
                foreach ($resistencias as $resistencia) {

                    $resultado += 1 / $resistencia;
                }

                $resultado = 1 / $resultado;

                echo "<div class='alert alert-success mt-2'>
                <h3>Resultado:</h3>
                <p>La resistencia eléctrica de N resistencias colocadas en paralelo es: <strong>" . $resultado . "</strong></p>
                </div>";

                return $resultado;
            } catch (Error $e) {
                //throw $th;
                // echo $e->getMessage();
                echo "<div class='alert alert-danger'>
                <p><strong>Error</strong> en la operación </p>
                </div>";
                return 0;
            }
        }

        echo "<br>";
        // echo resistenciasParalelo(4, 6, 10, 20); // 1,7647058824

        resistenciasParalelo(4, 6, 10, 20);
        resistenciasParalelo(10, 5, 1);
        resistenciasParalelo(10, 5, 0);
        resistenciasParalelo();
        ?>

    </section>

    <section id="03-ejercicio" class="p-4">
        <h2>Posición final de un móvil</h2>

        <p>
            Crea una función que calcule la posición final de un móvil x(t) en
            función de la posición inicial (x0), la velocidad inicial (velocidadInicial), la
            aceleración (a) y el tiempo (t):
        </p>

        <p>posicionFinal = posicionInicial + velocidadInicial * tiempo + 1/2 * aceleracion * tiempo^2</p>

        <p>La función debe recibir los cuatro parámetros y devolver el resultado de la fórmula.</p>

        <?php

        /**
         * Calcula la posición final de un móvil x(t) en función de la posición inicial (posicionInicial), la velocidad inicial (velocidadInicial), la aceleración (a) y el tiempo (t)
         *
         * @param float $posicionInicial
         * @param float $velocidadInicial
         * @param float $aceleracion
         * @param float $tiempo
         * @return float
         */

        function posicionFinalDeUnMovil(
            float $posicionInicial = 0,
            float $velocidadInicial = 0,
            float $aceleracion,
            float $tiempo
        ): float {

            if ($tiempo < 0) throw new Error("El tiempo no puede ser negativo");

            $posicionFinal = 0.5 * $aceleracion * $tiempo ** 2 + $velocidadInicial * $tiempo + $posicionInicial;
            echo "<div class='alert alert-success mt-2'>
                <h3>Resultado:</h3>
                <p>La posición final de un móvil es: <strong>" . $posicionFinal . "</strong></p>
                </div>";
            return $posicionFinal;
        }

        posicionFinalDeUnMovil(0, 2, 0.5, 10);
        posicionFinalDeUnMovil(5, 10, 0, 0);
        // posicionFinalDeUnMovil(5, 10, 5, 100);
        ?>
    </section>

    <section id="04-ejercicio" class="p-4">
        <h2>Numero de repeticiones</h2>

        <p>Haz una función que reciba un array y un valor y devuelva el número de veces que aparece ese valor en el array</p>

        <p>Prueba la función con el array [1, 2, 3, 4, 5, 6, 7, 8, 9, 0] y el valor 5 y comprueba que el resultado es 1.</p>

        <p>Prueba la función con el array [1, 2, 3, 4, 5, 5, 5, 5, 5, 0] y el valor 5 y comprueba que el resultado es 5.</p>

        <?php

        /**
         * Devuelve el número de veces que aparece un valor en un array
         *
         * @param array $array
         * @param mixed $valor
         * @return integer
         */

        function numeroDeRepeticiones(array $array, $valor): int
        {
            $contador = 0;
            foreach ($array as $elemento) {
                if ($elemento === $valor) {
                    $contador++;
                }
            }

            echo "<div class='alert alert-success mt-2'>
                <h3>Resultado:</h3>
                <p>El número de veces que aparece el valor <strong>" . $valor . "</strong> en el array es: <strong>" . $contador . "</strong></p>
                </div>";
            return $contador;
        }

        numeroDeRepeticiones([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], 5);
        numeroDeRepeticiones([1, 2, 3, 4, 5, 5, 5, 5, 5, 0], 5);
        ?>
    </section>

    <section id="05-ejercicio" class="p-4">
        <h2>Multiplica los valores</h2>

        <p>Haz una función que reciba un array y un entero y multiplique
            todos los valores del array por el entero. Se debe modificar el
            array original.
        </p>

        <p>Prueba la función con el array [1, 2, 3, 4, 5, 6, 7, 8, 9, 0] y el entero 5 y comprueba que el array resultante es [5, 10, 15, 20, 25, 30, 35, 40, 45, 0].</p>

        <?php
        /**
         * Multiplica los valores de un array por un entero
         *
         * @param array $array
         * @param integer $entero
         * @return array
         */

        // function multiplicaLosValores(array &$array, int $entero): void
        // {
        //     // Debemos modificar el array original, por lo que no podemos usar foreach
        //     // foreach ($array as &$elemento) {
        //     //     $elemento *= $entero;
        //     // }

        //     for ($i = 0; $i < count($array); $i++) {
        //         $array[$i] *= $entero;
        //     }

        //     echo "<div class='alert alert-success mt-2'>
        //         <h3>Resultado:</h3>
        //         <p>El array resultante es: <strong>" . implode(", ", $array) . "</strong></p>
        //         </div>";
        //     return;
        // }

        // multiplicaLosValores([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], 5);

        function multiplicaLosValores(array &$array, int $entero): array
        {

            for ($i = 0; $i < count($array); $i++) {
                $array[$i] *= $entero;
            }

            echo "<div class='alert alert-success mt-2'>
                <h3>Resultado:</h3>
                <p>El array resultante es: <strong>" . implode(", ", $array) . "</strong></p>
                </div>";

            return $array;
        }

        $lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

        multiplicaLosValores($lista, 5);
        ?>


    </section>

    <section id="06-ejercicio" class="p-4">
        <h2>Invierte el orden de los elementos</h2>

        <p>Haz una función que reciba un vector e invierta el orden de los
            elementos que contiene (no vale usar array_reverse()).</p>

        <ul>
            <li>Versión A: el vector original debe ser modificado.</li>
            <li>Versión B: se debe retornar un nuevo vector y el original no debe
                quedar modificado.</li>
        </ul>

        <p>Prueba la función con el array [1, 2, 3, 4, 5, 6, 7, 8, 9, 0] y comprueba que el array resultante es [0, 9, 8, 7, 6, 5, 4, 3, 2, 1].</p>

        <?php
        /**
         * Invierte el orden de los elementos de un array
         *
         * @param array $array
         * @return array
         */

        function invierteElOrdenDeLosElementosVersionA(array &$array): array
        {
            $arrayInvertido = [];
            for ($i = count($array) - 1; $i >= 0; $i--) {
                $arrayInvertido[] = $array[$i];
            }

            echo "<div class='alert alert-success mt-2'>
                <h3>Resultado version A:</h3>
                <p>El array resultante es: <strong>" . implode(", ", $arrayInvertido) . "</strong></p>
                </div>";

            return $arrayInvertido;
        }

        $lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

        invierteElOrdenDeLosElementosVersionA($lista);

        // Versión B: se debe retornar un nuevo vector y el original no debe quedar modificado.


        ?>

    </section>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>

</body>

</html>