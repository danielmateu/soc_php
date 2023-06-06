<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container justify-content-center align-items-center  d-flex flex-column p-5">
    <h1>Ejercicio 03- Generar Tabla </h1>
    <hr>

    <h2>Bucle FOR</h2>
    <table class="table">
        <tr>
            <th>Radio</th>
            <th>Diámetro</th>
            <th>Prímetro</th>
            <th>Área</th>
        </tr>
        <!-- Rellenamos la tabla con un bucle hasta 10 de radio con un bucle for -->
        <?php
        /* This is a PHP code block that generates a table with four columns: "Radio", "Diámetro",
        "Prímetro", and "Área". It uses a for loop to iterate through values of  from 1 to 10,
        and for each value it generates a new row in the table with the corresponding values for
        diameter, perimeter, and area calculated using mathematical formulas. The values are
        displayed in the table using HTML table tags and PHP echo statements. */
        for ($radio = 1; $radio <= 10; $radio++) {
            echo "<tr>";
            echo "<td>$radio</td>";
            echo "<td>" . ($radio * 2) . "</td>";
            echo "<td>" . ($radio * 2 * pi()) . "</td>";
            echo "<td>" . (pi() * pow($radio, 2)) . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <h2>Bucle For Limpio</h2>

    <table class="table">
        <tr>
            <th>Radio</th>
            <th>Diámetro</th>
            <th>Prímetro</th>
            <th>Área</th>
        </tr>

        <?php
        /* This is a PHP code block that generates a table with four columns: "Radio", "Diámetro",
        "Prímetro", and "Área". It uses a for loop to iterate through values of  from 1 to 10,
        and for each value it generates a new row in the table with the corresponding values for
        diameter, perimeter, and area calculated using mathematical formulas. The values are

        displayed in the table using HTML table tags and PHP echo statements. */
        for ($radio = 1; $radio <= 10; $radio++) {
        ?>
            <tr>
                <td><?php echo $radio ?></td>
                <td><?php echo $radio * 2 ?></td>
                <td><?php echo $radio * 2 * pi() ?></td>
                <td><?php echo pi() * pow($radio, 2) ?></td>
            </tr>

        <?php
        }
        ?>

    </table>

    <hr>

    <h2>Bucle WHILE</h2>
    <table class="table">
        <tr>
            <th>Radio</th>
            <th>Diámetro</th>
            <th>Prímetro</th>
            <th>Área</th>
        </tr>
        <!-- Rellenamos la tabla con un bucle hasta 10 de radio con un bucle for -->
        <?php
        $radio = 1;

        while ($radio <= 10) {
            $diametro = $radio * 2;
            $perimetro = $diametro * pi();
            $area = pi() * pow($radio, 2);
        ?>

            <tr>
                <td><?php echo $radio ?></td>
                <td><?php echo $diametro ?></td>
                <td><?php echo $perimetro ?></td>
                <td><?php echo $area ?></td>
            </tr>

        <?php
            $radio++;
        }
        ?>
    </table>

    <?php
    ?>
</body>

</html>