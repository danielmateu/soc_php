<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

</head>

<body class="container p-4 position-relative">

    <header class="header d-flex flex-column bg-dark  p-4 mb-4 position-sticky top-0 start-0  col-12 rounded opacity-4" id="menu">
        <h1 class="col-6 text-white">POO</h1>
        <nav class="navbar navbar-dark d-flex flex-column align-items-start">
            <a href="#introPOO">Intro</a>
            <a href="#clases">Clases</a>
            <a href="#abstraccion">Abstraccion</a>
            <a href="#encapsulacion">Encapsulacion</a>
            <a href="#modularidad">Modularidad</a>
            <a href="#jerarquia">Jerarquia</a>
            <a href="#polimorfismo">Polimorfismo</a>
            <a href="#herencia">Herencia</a>
            <a href="#sobrecarga">Sobrecarga</a>
            <a href="#sobrescritura">Sobrescritura</a>
            <a href="#clasesAbstractas">Clases Abstractas</a>
            <a href="#interfaces">Interfaces</a>
            <a href="#clasesAnonimas">Clases Anonimas</a>
            <a href="#traits">Traits</a>
            <a href="#metodosMagicos">Metodos Magicos</a>
            <a href="#metodosEstaticos">Metodos Estaticos</a>
            <!-- Constantes de clase -->
            <a href="#constantesDeClase">Constantes de clase</a>
        </nav>
        <!-- Boton para cambio de modo -->
        <div class="form-check form-switch position-absolute top-0 end-0 me-1 mt-1">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Modo</label> -->
        </div>

    </header>

    <main class="p-2">

        <section class="mb-5" id="introPOO">
            <h2>Orientacion Orientada a Objetos</h2>

            <p>La programación orientada a objetos es un paradigma surgido
                en los años 70, que utiliza objetos como elementos
                fundamentales en la construcción de la solución.
            </p>

            <p>
                Un objeto es una abstracción de algún hecho o ente del
                mundo real, con atributos que representan sus características o
                propiedades, y métodos que emulan su comportamiento o
                actividad.
            </p>

            <p>
                La programación orientada a objetos se basa en la
                programación estructurada, pero añade nuevos conceptos
                como la abstracción, encapsulación, modularidad y
                polimorfismo.
            </p>

        </section>

        <section class="mb-5" id="clases">

            <h2>Clases</h2>

            <p>
                Una clase es una plantilla para la creación de objetos de datos según un modelo predefinido.
                Las clases se utilizan para representar entidades o conceptos. Cada clase es un modelo que define un conjunto de variables (el estado), y métodos apropiados para operar con dichos datos (el comportamiento).
            </p>

            <p>
                Las clases se utilizan para representar entidades o conceptos. Cada clase es un modelo que define un conjunto de variables (el estado), y métodos apropiados para operar con dichos datos (el comportamiento).
            </p>



            <?php
            require_once '../../clases/Coche.php';

            $seatIbiza = new Coche('Seat', 'Ibiza', 'Rojo', 0);
            $wvPolo = new Coche('WV', 'Polo', 'Azul', 0, 20000);

            // Acelerar el coche
            $seatIbiza->acelerar()->acelerar()->frenar();

            // Frenar el coche
            // $seatIbiza->frenar();

            // Parar el coche
            // $seatIbiza->parar();

            echo $seatIbiza->mostrarInformacion();
            echo '<br>';
            echo $wvPolo->mostrarInformacion();

            ?>
        </section>

        <section class="mb-5" id="abstraccion">
            <h2>Abstraccion</h2>

            <p>
                La abstracción es la capacidad de representar entidades
                del mundo real en forma de objetos de datos y métodos
                asociados, con el fin de simplificar su tratamiento en el
                programa.

            </p>



        </section>

        <section class="mb-5" id="encapsulacion">
            <h2>Encapsulacion</h2>

            <p>
                La encapsulación es la capacidad de ocultar los datos
                internos de un objeto y mostrar sólo aquellos que son
                necesarios para el uso del mismo.

            </p>

            <p>
                La encapsulación se consigue mediante la definición de
                atributos y métodos públicos y privados.

            </p>

            <p>
                Los atributos y métodos privados sólo pueden ser accedidos desde dentro de la propia clase, mientras que los públicos
                pueden ser accedidos desde cualquier parte del programa.

            </p>

            <p>Mediante el encapsulado se ofrece: </p>

            <ul>
                <li>Una frontera, delimitando el ámbito de los objetos del software.</li>

                <li>Una interfaz que describe cómo los objetos interactúan con otros.</li>

                <li>Un mecanismo para restringir el acceso a algunos de los
                    componentes de los objetos.</li>
            </ul>
        </section>

        <section class="mb-5" modularidad">
            <h2>Modularidad</h2>

            <p>
                La modularidad es la capacidad de dividir un programa en
                partes más pequeñas (módulos), que pueden ser
                desarrolladas y probadas de forma independiente.

            </p>

            <p>
                La modularidad permite la reutilización de código, ya que
                los módulos pueden ser utilizados en diferentes
                aplicaciones.

            </p>

            <p>
                La modularidad se consigue mediante la definición de
                clases y paquetes.

            </p>

            <p>
                Una clase es una plantilla para la creación de objetos de
                datos según un modelo predefinido.

            </p>

            <p>
                Un paquete es un conjunto de clases relacionadas entre sí,
                que se agrupan en un directorio.

            </p>

            <p>
                Los paquetes permiten organizar las clases en grupos
                lógicos, y evitar conflictos de nombres entre clases.

            </p>

            <p>
                Los paquetes también permiten controlar el acceso a las
                clases, ya que una clase sólo puede ser utilizada por otra
                clase si pertenece al mismo paquete o si es pública.

            </p>
        </section>

        <section class="mb-5" id='jerarquia'>
            <h2>Jerarquía</h2>

            <p>
                La jerarquía es la capacidad de definir clases que heredan
                atributos y métodos de otras clases.

                La jerarquía permite definir clases genéricas, que
                agrupan atributos y métodos comunes a otras clases más
                específicas.
            </p>

            <p>
                La jerarquía se consigue mediante la definición de clases
                padre e hijas.

                Una clase hija hereda los atributos y métodos de la clase
                padre, y puede añadir nuevos atributos y métodos.
            </p>

            <p>
                Una clase hija puede sobrescribir los métodos de la clase
                padre, para adaptarlos a sus necesidades.

                La clase padre se denomina superclase, y la clase hija se
                denomina subclase.
            </p>

            <p>
                La herencia permite definir clases genéricas, que
                agrupan atributos y métodos comunes a otras clases más
                específicas.

                La herencia se consigue mediante la definición de clases
                padre e hijas.
            </p>

            <p>
                Una clase hija hereda los atributos y métodos de la clase
                padre, y puede añadir nuevos atributos y métodos.

                Una clase hija puede sobrescribir los métodos de la clase
                padre, para adaptarlos a sus necesidades.
            </p>

        </section>

        <section class="mb-5" id="polimorfismo">
            <h2>Polimorfismo</h2>

            <p>
                El polimorfismo es la capacidad de definir varias clases
                distintas que contienen métodos con el mismo nombre.

                El polimorfismo permite utilizar un método de distintas
                formas, según el objeto que lo contenga.

                El polimorfismo se consigue mediante la definición de
                métodos con el mismo nombre en distintas clases.
            </p>
        </section>

        <section class="mb-5" id="metodosMagicos">
            <h2>Métodos Mágicos</h2>

            <p>
                Los <strong>métodos mágicos</strong> son métodos que se ejecutan
                automáticamente en ciertas circunstancias.

                Los <strong>métodos mágicos</strong> se definen con el nombre
                __nombreDelMetodo__.

                Los <strong>métodos mágicos</strong> se utilizan para realizar
                acciones que no se pueden realizar con los métodos
                convencionales.

                Los <strong>métodos mágicos</strong> se invocan automáticamente
                cuando se produce un evento.

                Los <strong>métodos mágicos</strong> más utilizados son __construct,
                __toString, __get, __set, __isset, __unset, __clone y __destruct.
            </p>

        </section>

        <section class="mb-5" id="metodosEstaticos">
            <h2>Métodos estáticos</h2>

            <p>
                Los <strong>métodos estáticos</strong> son métodos que pueden ser
                utilizados sin necesidad de crear un objeto de la clase.

                Los <strong>métodos estáticos</strong> se definen con la palabra clave
                static.

                Los <strong>métodos estáticos</strong> sólo pueden acceder a atributos y
                <strong>métodos estáticos</strong> de la clase.

                Los <strong>métodos estáticos</strong> se utilizan para agrupar
                funcionalidades comunes a todas las instancias de la clase.

                Los <strong>métodos estáticos</strong> se invocan utilizando el nombre de
                la clase seguido de :: y el nombre del método.
            </p>

        </section>

        <section class="mb-5" id="constantesDeClase">
            <h2>Constantes de clase</h2>

            <p>
                Las <strong>constantes de clase</strong> son atributos cuyo valor no
                puede ser modificado.

                Las <strong>constantes de clase</strong> se definen con la palabra
                clave const.

                Las <strong>constantes de clase</strong> se utilizan para definir
                valores que no pueden ser modificados.

                Las <strong>constantes de clase</strong> se invocan utilizando el
                nombre de la clase seguido de :: y el nombre de la constante.
            </p>

        </section>


    </main>

    <button class="btn btn-secondary btn-lg d-block mx-auto mt-5" id="btn-scroll">
        Volver al principio
    </button>

    <footer class="p-2 mt-5 border-top text-center">
        &copy; <?= date('Y') ?> - Desarrollo Web en Entorno Servidor
    </footer>

    <script src="../../index.js"></script>
</body>

</html>