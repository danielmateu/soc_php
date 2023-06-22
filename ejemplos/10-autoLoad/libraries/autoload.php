<?php

// FUncion para buscar las clases
function load(string $clase)
{
    global $autoloadDirectories;

    // Para cada directorio de la lista
    foreach ($autoloadDirectories as $dir) {
        // Componer el nombre del fichero
        $file = "$dir/$clase.php";
        // Si el fichero existe
        if (file_exists($file)) {
            require_once($file);
            return;
        }
    }
}

// Registrar la función autoload
spl_autoload_register('load');
