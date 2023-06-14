<?php

class Perro
{
    public $nombre;
    public $raza;
    public $edad;
    public $color;
    public $peso;
    public $ladrar;

    public function __construct($nombre, $raza, $edad, $color, $peso, $ladrar)
    {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->edad = $edad;
        $this->color = $color;
        $this->peso = $peso;
        $this->ladrar = $ladrar;
    }

    public function mostrarInformacion()
    {
        return "
            <div class = 'alert alert-primary'>
                <p>El perro se llama $this->nombre, es de raza $this->raza, tiene $this->edad años, es de color $this->color y pesa $this->peso kg</p>

                <p>$this->nombre dice: <span class='fw-bold'>$this->ladrar</span></p>
            </div>";
    }

    public function ladrar()
    {

        // return "$this->nombre dice: $this->ladrar";
        echo "GUAU!";
    }

    public function comer($comida)
    {
        return "El perro $this->nombre está comiendo $comida";
    }

    public function engordar($kilos)
    {
        $this->peso += $kilos;
        return "El perro $this->nombre ha engordado $kilos kg y ahora pesa $this->peso kg";
    }

    public function dormir()
    {
        return "El perro $this->nombre está durmiendo";
    }

    public function __toString()
    {
        return $this->mostrarInformacion();
    }
}
