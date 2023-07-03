<?php

define('AUTOLOAD_DIRECTORIES', [
    '../models',
    '../libraries',
    '../exceptions',

]);

// Controlador por defecto
define('DEFAULT_CONTROLLER', 'welcome');

// Parámetros de configuración de la DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'biblioteca');
define('DB_PORT', '3306');
define('DB_CHARSET', 'utf8');

// Clase DB que usará nuestro ORM
define('DB_CLASS', 'DB');
define('SGDB', 'mysql');

// Otros parámetros
define('DEBUG', true);
