<?php

class Vehiculo
{

    // Propiedades 
    public $marca, $modelo, $color, $velocidad;

    public function __construct(String $marca, String $modelo, String $color, int $velocidad)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }

    // Método toString
    public function __toString()
    {
        return "Marca: $this->marca, Modelo: $this->modelo, Color: $this->color, Velocidad: $this->velocidad";
    }
}
