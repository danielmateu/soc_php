<?php
include '../config/config.php';
include '../libraries/autoload.php';

try {
    // Si llega el controlador por la URL
    @require '../controllers/' . ($_GET['controlador'] ?? DEFAULT_CONTROLLER) . '.php';
} catch (\Throwable $e) {
    //erow $e;
    $mensaje = $e->getMessage();
    require '../views/error.php';
}
