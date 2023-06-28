<?php
// Conecta y establece el charset en funcion de los parametros de configuracion
$conexion = new mysqli($dbHost, $dbUser, $dbPassword, $dbDatabase);

if ($conexion->connect_errno) {
    echo 'Fallo al conectar a MySQL: ' . $conexion->connect_error;
} else {
    $conexion->set_charset($dbCharset);
}


