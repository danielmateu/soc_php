<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Circulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../styles.css"> -->
</head>

<body class="container">
    <h1>Calcula diámetro, perímetro y área de un círculo</h1>

    <p>Escribe un programa que calcule el diámetro, perímetro y área de
        un círculo a partir de su radio.</p>

    <p>La fórmula del diámetro es 2*r, la del perímetro 2*PI*r y la del
        área PI*r2. </p>

    <form method="get" class="d-flex flex-column col-5">
        <label for="radio">Radio</label>
        <input type="number" name="radio" id="radio" step="0.1" value="0">
        <input type="submit" value="Calcular" class="btn btn-primary mt-2">
    </form>

    <?php
    if (isset($_GET["radio"])) {
        $radio = $_GET["radio"];
        $diametro = $radio * 2;
        $perimetro = 2 * pi() * $radio;
        $area = pi() * $radio ** 2;
        echo "<p>El diámetro es $diametro</p>";
        echo "<p>El perímetro es $perimetro</p>";
        echo "<p>El área es $area</p>";
    } else {
        echo "<p>Introduce el radio</p>";
    }

    ?>
</body>

</html>