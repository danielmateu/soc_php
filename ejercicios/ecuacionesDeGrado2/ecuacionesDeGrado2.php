<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuaciones de segundo grado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../styles.css"> -->
</head>

<body class="container">
    <h1>Ecuaciones de segundo grado</h1>

    <p>Escribe un programa que resuelva ecuaciones de segundo grado</p>

    <p>ax<sup>2</sup> + bx + c = 0</p>

    <p>Para ello, el programa debe pedir los valores de a, b y c</p>

    <p>La solución de una ecuación de segundo grado es:</p>

    <p>x<sub>1</sub> = (-b + √(b<sup>2</sup> - 4ac)) / 2a</p>

    <p>x<sub>2</sub> = (-b - √(b<sup>2</sup> - 4ac)) / 2a</p>

    <p>Si el discriminante (b<sup>2</sup> - 4ac) es negativo, la ecuación no tiene solución</p>

    <p>Si el discriminante es 0, la ecuación tiene una única solución</p>

    <p>Si el discriminante es positivo, la ecuación tiene dos soluciones</p>

    <p>Para calcular la raíz cuadrada de un número, se puede usar la función sqrt</p>

    <p>Para elevar un número a una potencia, se puede usar la función pow</p>

    <form method="post" class="d-flex flex-column col-5 form">
        <label for="a">a</label>
        <input type="number" name="a" id="a" value="0">
        <label for="b">b</label>
        <input type="number" name="b" id="b" value="0">
        <label for="c">c</label>
        <input type="number" name="c" id="c" value="0">
        <input type="submit" value="Calcular" class="btn btn-primary mt-2">
    </form>

    <div id="resultado">
    </div>

    <?php
    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $x1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
        $x2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);

        echo "<p>El resultado de la ecuación $a x<sup>2</sup> + $b x + $c = 0 es:</p>
        
        <p>x<sub>1</sub> = $x1</p>
        <p>x<sub>2</sub> = $x2</p>";
    }
    ?>

    <!-- <script>
        // obtener los valores de los inputs
        const a = document.getElementById("a");
        const b = document.getElementById("b");
        const c = document.getElementById("c");

        const ecuacion = (a, b, c) => {
            let x1 = (-b + Math.sqrt(Math.pow(b, 2) - 4 * a * c)) / (2 * a);
            let x2 = (-b - Math.sqrt(Math.pow(b, 2) - 4 * a * c)) / (2 * a);
            return [x1, x2];
        }

        const mostrarResultado = () => {
            const resultado = document.getElementById("resultado");
            resultado.innerHTML = "";
            const [x1, x2] = ecuacion(a.value, b.value, c.value);
            resultado.innerHTML += `<p>El resultado de la ecuación ${a.value} x<sup>2</sup> + ${b.value} x + ${c.value} = 0 es:</p>
            
            <p>x<sub>1</sub> = ${x1}</p>
            <p>x<sub>2</sub> = ${x2}</p>`;
        }

        // añadir un event listener al botón
        const boton = document.querySelector("input[type=submit]");

        boton.addEventListener("click", mostrarResultado);
    </script> -->

    <!-- <script src="./index.js"></script> -->
</body>

</html>