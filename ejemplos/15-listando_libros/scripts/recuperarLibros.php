<?php
// lanza la consulta seleccionando todos los campos de la tabla libros
// $resultado = $conexion->query("SELECT * FROM libros");
//  Lanza consulta que selecciona todos los campos de la tabla libros y los ordena por id de forma ascendente
$resultado = $conexion->query("SELECT * FROM libros ORDER BY id ASC LIMIt 10");

// Preparamos una lista de libros
$libros = [];

// Convierte cada filta del resultado en un objeto Libro...
while ($fila = $resultado->fetch_object('Libro')) {
    // ...y lo añade a la lista
    $libros[] = $fila;
}

// Liberamos la memoria ocupada por el resultado
$resultado->free();
