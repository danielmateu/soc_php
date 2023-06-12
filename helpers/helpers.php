<?php

// funcion que devuelve un array con los numeros pares del 0 al 100
function pares()
{
    $pares = [];
    for ($i = 0; $i <= 100; $i += 2) {
        $pares[] = $i;
    }

    // Imprimir el resultado en el html
    echo implode(', ', $pares);
    return $pares;
}

// funcion que devuelve un array con los multiplos de 50 del 1000 al 0

function multiplosDe50()
{
    $multiplos = [];
    for ($i = 1000; $i >= 0; $i -= 50) {
        $multiplos[] = $i;
    }

    // Imprimir el resultado en el html
    echo implode(', ', $multiplos);
    return $multiplos;
}

// funcion que devuelve un array con la tabla de multiplicar del 5
function tablaDel5()
{
    $tabla = [];
    for ($i = 0; $i <= 10; $i++) {
        $tabla[] = $i * 5;
    }

    // Imprimir el resultado en el html
    echo implode(', ', $tabla);
    return $tabla;
}

// funcion que devuelve un array con las tablas de multiplicar del 1 al 9
function tablasDel1al9()
{
    $tablas = [];
    for ($i = 1; $i <= 9; $i++) {
        $tabla = [];

        for ($j = 0; $j <= 10; $j++) {
            $tabla[] = $i * $j;
        }
        $tablas[] = implode(', ', $tabla);
    }

    // Imprimir el resultado en el html
    echo implode('<br> ', $tablas);
    return $tablas;
}

// Tabla de multiplicar
function tablaMultiplicar($numero)
{
    $tabla = [];
    for ($i = 0; $i <= 10; $i++) {
        $tabla[] = $i * $numero;
    }

    // Imprimir el resultado en el html
    echo implode(', ', $tabla);
    return $tabla;
}

// Funcion es par?

function esPar()
{
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        // if ($numero % 2 == 0) {
        //     echo "<p>El número $numero es par</p>";
        // } else {
        //     echo "<p>El número $numero es impar</p>";
        // }

        // Operador ternario
        echo "<div class='alert alert-success mt-2'>
        <h3>Resultado:</h3>
        <p>El número $numero es " . ($numero % 2 == 0 ? "par" : "impar") . "</p>
        </div>";
    }
}

function esNegativo()
{
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];

        echo "<div class='alert alert-success mt-2'>
        <h3>Resultado:</h3>
        <p>El número $numero es " . ($numero < 0 ? "negativo" : ($numero > 0 ? "positivo" : "0")) . "</p>
        </div>";
    }
}

// Obtener letra del DNI

function dniLetter(string $numero): string
{
    $letras = array(
        "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D",
        "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L",
        "C", "K", "E"
    );

    return $letras[$numero % 23];
}

// Funcion que nos diga si el DNI introducido es correcto o no

/**
 * Comprueba si un DNI es válido
 *
 * Esta funcion comprueba si un DNI es válido o no
 * 
 * Proptotipo (declaración): function isDniValid(string $dni): bool
 * 
 * 
 * @param string $dni
 * @return boolean
 * 
 * @example isDniValid('12345678Z') => true
 * @example isDniValid('12345678A') => false
 */

function isDniValid(string $dni): bool
{
    // Tomar DNI Que llega por POST
    $dni = $_POST['numero'];

    // Extraer el número del DNI (los 8 primeros dígitos)
    $numero = substr($dni, 0, -1);

    // Extraer la letra del DNI y pasarla a mayúsculas
    $letra = strtoupper(substr($dni, -1));

    // Calcular la letra que corresponde a ese número de DNI
    $letraCalculada = dniLetter($numero);
    // $letraCalculada = dniLetter();
    return $letra == $letraCalculada;
}
