

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipado estricto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
</head>
<body
class="container justify-content-center align-items-center  d-flex flex-column p-5"
>
    <h1>Tipado Estricto</h1>
<?php

// Ejemplo de tipado estricto
// Siempre es recomendable usarlo para evitar errores en el código y que el intérprete nos avise de ellos 

function hipotenusa (float $cateto1, float $cateto2) : float {
    // Imprimir el tipo de dato de las variables

    echo gettype($cateto1) . "<br>";
    echo gettype($cateto2) . "<br>";

    return sqrt($cateto1**2 + $cateto2**2);

}

echo hipotenusa(3, 4); // 5 

// echo hipotenusa(3, 4.5); // 5.3150729063673

// echo hipotenusa(3, "4"); // 5

// Fin del ejemplo de tipado estricto

?>

</body>
</html>