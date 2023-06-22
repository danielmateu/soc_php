<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body class="container">
    <h1>Variables</h1>

    <?php

    // En PHP no se declaran las variables con antelación, se usan
    // directamente en el momento en el que las necesitamos por primera
    // vez.

    //     Si hacemos una operación de lectura para una variable inexistente:

    //  Se producirá una advertencia (Warning).
    //  Se asumirá un valor por defecto que depende del tipo.
    //  Seguirá la ejecución del programa, no se detendrá.

    $nombre = "Dani";
    $edad = 18;
    $altura = 1.75;
    $casado = false;
    $hijos = null;
    $profesiones = ["programador", "administrador", "contador"];
    $profesiones[] = "ingeniero";


    echo "
    <p>Nombre: $nombre</p> 
    <p>Edad: $edad</p>
    <p>Altura: $altura</p>
    <p>Casado: $casado</p>
    <p>Hijos: $hijos</p>
    <p>Profesiones: $profesiones[0]</p>
    ";

    //     Los valores por defecto que se asignarán a las variables cuando
    // no existan son:


    // . boolean -> false
    // . int o float -> 0
    // . String -> ‘’
    // . objetos o resources -> null



    ?>

    <h2>Ambito de las variables</h2>

    <!-- El ámbito o alcance de las variables en PHP puede ser:

     Local.
     Global.
     Superglobal.
     De sesión.
     Estático.

     Local: las variables declaradas dentro de una función son
    locales a dicha función y serán borradas de la memoria al
    finalizar su ejecución. -->

    <?php

    function ambito()
    {
        $local = "local";
        echo "<p>Variable local: $local</p>";
    }

    // ambito();

    function sumar(float $num1 = 0, float $num2 = 0): float
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    echo "<p>Resultado de la suma: " . sumar(2.5, 3) . "</p>";

    // echo "<p>Variable local: $local</p>";

    //  Global: las variables declaradas fuera de una función son
    // globales y pueden ser accedidas desde cualquier parte del
    // programa. Para acceder a una variable global desde dentro
    // de una función se debe usar la palabra reservada global.

    $global = "global";

    function ambito2()
    {
        global $global;
        echo "<p>Variable global: $global</p>";
    }

    // ambito2();

    //  Superglobal: son variables predefinidas por PHP que
    // contienen información sobre el entorno de ejecución. Son
    // accesibles desde cualquier parte del programa. Las más
    // utilizadas son:

    // . $_GET: contiene los datos enviados por el método GET.
    // . $_POST: contiene los datos enviados por el método POST.
    // . $_REQUEST: contiene los datos enviados por el método
    // GET o POST.
    // . $_SERVER: contiene información sobre el servidor y el
    // entorno de ejecución.
    // . $_SESSION: contiene los datos de la sesión actual.
    // . $_COOKIE: contiene los datos de las cookies.
    // . $_FILES: contiene los datos de los ficheros subidos al
    // servidor.
    // . $_ENV: contiene los datos del entorno.


    //  De sesión: son variables que se almacenan en el servidor
    // para ser usadas en diferentes páginas. Para poder usarlas
    // se debe iniciar la sesión con la función session_start().
    // Las variables de sesión se almacenan en el array
    // superglobal $_SESSION.


    //  Estático: son variables que mantienen su valor entre
    // diferentes llamadas a una función. Para declarar una
    // variable estática se debe usar la palabra reservada static.

    ?>

    <h2>Ámbito de de las variables</h2>

    <p>Estático: una variable local estática no es borrada cuando se sale
        de la función en la que está declarada.</p>

    <?php

    function estatica()
    {
        static $valor = 0;
        // $valor = 0;
        $valor++;
        echo "<p>Variable estática: $valor</p>";
    }

    estatica();
    estatica();
    estatica();

    ?>
    <p>Variables de sesión: a diferencia de las variables globales, estas
        variables sí persisten en el servidor entre distintas peticiones.</p>
    <ul>

    </ul>
    <li>Se accede a ellas mediante la variable superglobal $_SESSION.</li>
    <li>Se usan, entre otras cosas, para mantener identificado el usuario en
        una aplicación web.</li>
    <li>Por ejemplo, es habitual que $_SESSION[‘user’] disponga de una
        referencia a un objeto usuario con información del usuario que ha
        hecho login, en caso de no existir o ser NULL, el usuario no se
        encuentra identificado en el sistema.</li>

    <h2>Superglobales</h2>

    <p>$_GET: contiene los datos enviados por el método GET.</p>
    <p>$_POST: contiene los datos enviados por el método POST.</p>
    <p>$_REQUEST: contiene los datos enviados por el método GET o POST.</p>
    <p>$_SERVER: contiene información sobre el servidor y el entorno de
        ejecución.</p>
    <p>$_SESSION: contiene los datos de la sesión actual.</p>
    <p>$_COOKIE: contiene los datos de las cookies.</p>
    <p>$_FILES: contiene los datos de los ficheros subidos al servidor.</p>
    <p>$_ENV: contiene los datos del entorno.</p>

    <?php
    // Navegador del cliente
    echo "<p>Tu navegador: $_SERVER[HTTP_USER_AGENT]</p>";

    // Dirección IP del cliente
    echo "<p>Tu dirección IP: $_SERVER[REMOTE_ADDR]</p>";
    // echo "<p>Tu dirección IP: $_SERVER[REMOTE_ADDR]</p>";

    // Software del servidor
    echo "<p>Software del servidor: $_SERVER[SERVER_SOFTWARE]</p>";

    // Muestra todo lo que hay en el array $_SERVER
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    ?>

    <h2>Variables Variables</h2>

    <p>Una variable variable toma el valor de una variable y lo trata como
        el nombre de una variable.</p>

    <?php

    $nombre = "nombre";
    $$nombre = "valor";

    echo "<p>Variable nombre: $nombre</p>";

    ?>

    <h2>Variables referencia</h2>

    <p>Una variable referencia es un alias de otra variable. Si se modifica
        el valor de una variable referencia, también se modifica el valor de
        la variable original.</p>


    <?php

    $objeto = new stdClass();

    $objeto->nombre = "Dani";
    $objeto->apellido = "Mateu";
    $objeto->edad = 20;

    echo $objeto->nombre;
    ?>

    <?php
    class Moto
    {
        public $marca;
        public $modelo;
        public $color;
        public $cilindrada;

        public function __construct($marca, $modelo, $color, $cilindrada)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
            $this->cilindrada = $cilindrada;
        }

        public function __toString()
        {
            return "<p>Marca: $this->marca</p>
                    <p>Modelo: $this->modelo</p>
                    <p>Color: $this->color</p>
                    <p>Cilindrada: $this->cilindrada</p>";
        }
    }

    $moto1 = new Moto('Honda', 'CBR', 'Roja', 1000);

    $moto2 = new Moto('Yamaha', 'R1', 'Azul', 1000);

    echo $moto1;

    ?>

    <h2>Constantes</h2>

    <p>Una constante es un identificador (nombre) para un valor único. Como
        su nombre indica, ese valor no puede cambiar durante la ejecución del
        script (excepto las constantes mágicas, que no son constantes en
        realidad). Las constantes se pueden definir usando la función define()
        o la palabra reservada const.</p>

    <?php

    define("CONSTANTE", "valor");

    echo "<p>Constante: " . CONSTANTE . "</p>";
    ?>





</body>

</html>