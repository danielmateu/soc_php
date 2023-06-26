<?php
session_start();

// Si llega el formulario de login
if (isset($_POST['usuario']) && isset($_POST['password'])) {

    // Creamos un objeto usuario con los datos del formulario
    $usuario = new stdClass();
    $usuario->nombre = $_POST['usuario'];
    $usuario->password = $_POST['password'];

    // Guardamos el objeto usuario en la sesión
    $_SESSION['usuario'] = $usuario;

}

// Si llega el formulario de logout

if (isset($_POST['logout'])) {
    //  Borra todas la variables de sesión
    $_SESSION = [];
    $parametrosCookie = session_get_cookie_params();

    // Borra la cookie de sesión
    setcookie(
        session_name(),
        '',
        1,
        $parametrosCookie['path'],
        $parametrosCookie['domain'],
        $parametrosCookie['secure'],
        $parametrosCookie['httponly']
    );

    // Destruye la sesión
    session_destroy();
}
