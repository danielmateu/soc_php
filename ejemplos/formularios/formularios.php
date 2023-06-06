<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="container ">
    <h1>Formularios</h1>
    <div class="col-5">
        <form method="POST" class="d-flex flex-column">
            <label for="cateto1">Cateto 1</label>
            <input type="number" name="cateto1" id="cateto1" placeholder="Introduce el primer cateto">
    
            <label for="cateto2">Cateto 2</label>
            <input type="number" name="cateto2" id="cateto2" placeholder="Introduce el segundo cateto">
    
            <input type="submit" value="calcular" class="btn btn-primary mt-4" name="calcular">
        </form>
    </div>


    <?php

    if (isset($_POST["calcular"])) {

        //     Los formularios son la forma más habitual de obtener datos de los
        // usuarios. En PHP, los datos de los formularios se almacenan en
        // variables globales llamadas $_GET y $_POST. Estas variables son
        // arrays asociativos, es decir, que almacenan pares clave-valor.

        //     $_GET almacena los datos que se envían a través de la URL, por
        // ejemplo, cuando se envía un formulario con el método GET.

        //     $_POST almacena los datos que se envían a través del cuerpo de
        // la petición HTTP, por ejemplo, cuando se envía un formulario con el
        // método POST.

        $cateto1 = $_POST["cateto1"];
        $cateto2 = $_POST["cateto2"];

        $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));

        echo "<p>La hipotenusa es $hipotenusa</p>";
    } else {
        echo "<p>Introduce los catetos</p>";
    }


    ?>
</body>

</html>