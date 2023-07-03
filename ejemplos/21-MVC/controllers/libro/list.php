<?php
// recuperamos la lista de libros
$libros = Libro::all();

// Carga la vista para mostrar la lista de libros
require_once '../views/libro/lista.php';
