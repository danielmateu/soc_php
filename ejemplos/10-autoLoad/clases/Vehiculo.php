<?php

class Vehiculo
{

    // Propiedades 
    public $marca, $modelo, $color, $velocidad, $peso;

    public function __construct(String $marca, String $modelo, String $color, int $velocidad, float $peso = 0)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
        $this->peso = $peso;
    }

    // Obtener el nombre
    public function getNombre()
    {
        return $this->marca . ' ' . $this->modelo;
    }

    // Método toString
    public function __toString()
    {
        return "Marca: $this->marca, Modelo: $this->modelo, Color: $this->color, Velocidad: $this->velocidad, Peso: $this->peso Kg";
    }
}
