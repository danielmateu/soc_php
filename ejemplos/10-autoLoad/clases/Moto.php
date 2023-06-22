<?php
class Moto extends Vehiculo
{
    // Método toString
    public function __toString()
    {
        return "Marca: $this->marca, Modelo: $this->modelo, Color: $this->color, Velocidad: $this->velocidad";
    }
}
