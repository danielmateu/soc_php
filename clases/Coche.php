<?php

class Coche
{
    public $marca;
    public $modelo;
    public $color;
    public $velocidad = 0;
    public $kms = 0;

    public function __construct($marca, $modelo, $color, $velocidad, $kms = 0)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
        $this->kms = $kms;
    }

    public function mostrarInformacion()
    {
        // return 'El coche es un ' . $this->marca . ' ' . $this->modelo . ' de color ' . $this->color . ' , tiene ' . $this->kms . ' kilometros recorridos y va a ' . $this->velocidad . ' km/h';

        return "
        <div class = 'alert alert-primary'>
            <p>El coche es un $this->marca $this->modelo de color $this->color, tiene $this->kms kilometros recorridos y va a $this->velocidad km/h</p>
        </div>";
    }

    public function acelerar()
    {
        // incrementar la velocidad de 20 en 20
        $this->velocidad += 20;
    }

    public function frenar()
    {
        // decrementar la velocidad de 20 en 20
        $this->velocidad -= 20;
    }

    public function parar()
    {
        $this->velocidad = 0;
    }

    public function __toString()
    {
        // return $this->mostrarInformacion();
        return "Coche: $this->marca $this->modelo";
    }
}
