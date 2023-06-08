<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra DNI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../styles.css"> -->
</head>

<body class="container">
    <h1>Letra DNI</h1>

    <p>Escribe un programa que determine la letra del DNI en función del
        número.</p>

    <p>
        El algoritmo para calcular la letra del DNI es el siguiente:
    </p>
    <ul>
        <li>El número debe ser entre 0 y 99999999</li>
        <li>Se divide el número entre 23</li>
        <li>El resto de la división es la posición de la letra en el
            siguiente array:</li>
    </ul>

    <pre>
        0 = T
        1 = R
        2 = W
        3 = A
        4 = G
        5 = M
        6 = Y
        7 = F
        8 = P
        9 = D
        10 = X
        11 = B
        12 = N
        13 = J
        14 = Z
        15 = S
        16 = Q
        17 = V
        18 = H
        19 = L
        20 = C
        21 = K
        22 = E
    </pre>

    <form method="post" class="d-flex flex-column col-5">
        <label for="numero">Número</label>
        <input type="number" name="numero" id="numero" value="0">
        <input type="submit" value="Calcular" class="btn btn-primary mt-2">
    </form>

    <?php
    // if (isset($_POST["numero"])) {
    //     $numero = $_POST["numero"];
    //     $letra = "";
    //     $resto = $numero % 23;
    //     switch ($resto) {
    //         case 0:
    //             $letra = "T";
    //             break;
    //         case 1:
    //             $letra = "R";
    //             break;
    //         case 2:
    //             $letra = "W";
    //             break;
    //         case 3:
    //             $letra = "A";
    //             break;
    //         case 4:
    //             $letra = "G";
    //             break;
    //         case 5:
    //             $letra = "M";
    //             break;
    //         case 6:
    //             $letra = "Y";
    //             break;
    //         case 7:
    //             $letra = "F";
    //             break;
    //         case 8:
    //             $letra = "P";
    //             break;
    //         case 9:
    //             $letra = "D";
    //             break;
    //         case 10:
    //             $letra = "X";
    //             break;
    //         case 11:
    //             $letra = "B";
    //             break;
    //         case 12:
    //             $letra = "N";
    //             break;
    //         case 13:
    //             $letra = "J";
    //             break;
    //         case 14:
    //             $letra = "Z";
    //             break;
    //         case 15:
    //             $letra = "S";
    //             break;
    //         case 16:
    //             $letra = "Q";
    //             break;
    //         case 17:
    //             $letra = "V";
    //             break;
    //         case 18:
    //             $letra = "H";
    //             break;
    //         case 19:
    //             $letra = "L";
    //             break;
    //         case 20:
    //             $letra = "C";
    //             break;
    //         case 21:
    //             $letra = "K";
    //             break;
    //         case 22:
    //             $letra = "E";
    //             break;
    //     }
    //     echo "<p>La letra del DNI $numero es $letra</p>";
    // }
    
    // Solucion con arrays
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        $letras = array(
            "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D",
            "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L",
            "C", "K", "E"
        );
        $resto = $numero % 23;
        echo "<p>La letra del DNI $numero es $letras[$resto]</p>";
    }
    ?>
</body>

</html>