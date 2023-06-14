<?php

class Circulo
{
    public $centro; // Punto
    public $radio;

    public function __construct(Punto $centro, float $radio = 0)
    {
        $this->centro = $centro;
        $this->radio = $radio;
    }

    // Métodos
    public function area()
    {
        return pi() * $this->radio * $this->radio;
    }

    public function perimetro()
    {
        return 2 * pi() * $this->radio;
    }

    // Mostrar el círculo
    public function __toString()
    {
        return "Centro: $this->centro, Radio: $this->radio";
    }
}
