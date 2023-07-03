<?php
// Mirar si llega el id del libro por GET
if (empty($GET['id'])) {
    throw new Exception('No se ha encontrado el libro');
}

$id = intval($_GET['id']); // Convertir a entero
// Recuperar el libro con ese ID    
$libro = Libro::all($id);

echo '<pre>';
var_dump($libro);
echo '</pre>';

// Mostrar la vista de detalles
require '../../views/libro/detalles.php';
