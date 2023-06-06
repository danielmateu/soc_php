<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área triangulo rectángulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="container">
    <h1>Calcula el área triangulo rectángulo</h1>

    <p>Escribe un programa que calcule el área de un triángulo
        rectángulo, dada la altura y la base.</p>

    <form action="" method="post" class="d-flex flex-column col-5">
        <label for="base">Base</label>
        <input type="number" name="base" id="base" step="0.1" value="0">
        <label for="altura">Altura</label>
        <input type="number" name="altura" id="altura" step="0.1" value="0">
        <input type="submit" value="Calcular" class="btn btn-primary mt-2">
    </form>

    <?php
    
    if (isset($_POST["base"]) && isset($_POST["altura"])) {
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $area = $base * $altura / 2;
        echo "<p>El área del triángulo rectángulo es $area</p>";
    } else {
        echo "<p>Introduce la base y la altura</p>";
    }
    ?>
</body>

</html>