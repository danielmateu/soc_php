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
            // $req = 1 / (1 / $r1 + 1 / $r2);
            $req = $r1 * $r2 / ($r1 + $r2);
            return $req;
        }

        echo resistenciaElectrica(4, 6);
        echo "<br>";
        echo resistenciaElectrica(10, 20);
        echo "<br>";
        // echo resistenciaElectrica(0, 0);

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

function resistenciaEnParalelodeNResistencias(float ...$resistencias): float
{
    $r = 0;
    foreach ($resistencias as $resistencia) {
        $r += 1 / $resistencia;
    }
    $r = 1 / $r;
    return $r;
}

        echo resistenciaEnParalelodeNResistencias(4, 6, 10, 20); // 1,7647058824
        echo "<br>";
        
        echo resistenciaEnParalelodeNResistencias(10, 5, 1); //0,7692307692
        echo "<br>";
        ?>

</section>

<section></section>
<h2>Calcula la resistencia eléctica con N resistencias</h2>



    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="./index.js"></script>

</body>

</html>