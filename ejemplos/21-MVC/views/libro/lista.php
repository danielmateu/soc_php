<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles.css">
    <!-- Icono -->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container p-4 position-relative">

    <header class="header d-flex bg-dark p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4 align-items-center justify-content-between" id="menu">
        <h1 class="text-white">Lista de libros</h1>

        <nav class="nav grid gap-3">
            <a href="../public/index.php" class="">Volver</a>
            <a href="index.php?controlador=libro/list" class="">Lista de libros</a>
            <a href="index.php?controlador=libro/create" class="">Nuevo libro</a>
        </nav>

        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="flex align-items-center justify-content-center" id=''>
        <!-- Tabla en la que mostramos la lista de libros -->
        <!-- centrar tabla -->
        <table class="col-12 p-2">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro) : ?>
                    <tr>
                        <td><?= $libro->titulo ?></td>
                        <td><?= $libro->autor ?></td>
                        <td><?= $libro->editorial ?></td>
                        <td class="d-flex align-items-center p-2">
                            <a href="index.php?controlador=libro/show&id=<?= $libro->id ?>" class="btn btn-outline-primary">Ver</a>
                            <a href="index.php?controlador=libro/edit&id=<?= $libro->id ?>" class="btn btn-outline-warning">Editar</a>
                            <a href="index.php?controlador=libro/delete&id=<?= $libro->id ?>" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../index.js"></script>
</body>

</html>