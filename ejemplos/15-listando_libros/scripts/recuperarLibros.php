<?php
// lanza la consulta seleccionando todos los campos de la tabla libros
$resultado = $conexion->query("SELECT * FROM libros");

// Preparamos una lista de libros
$libros = [];

// Convierte cada filta del resultado en un objeto Libro...
while ($fila = $resultado->fetch_object('Libro')) {
    // ...y lo añade a la lista
    $libros[] = $fila;
}

// Liberamos la memoria ocupada por el resultado
$resultado->free();
