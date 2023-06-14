<?php

class Linea
{
    public $punto1;
    public $punto2;

    public function __construct(Punto $punto1, Punto $punto2)
    {
        $this->punto1 = $punto1;
        $this->punto2 = $punto2;
    }

    public function longitud()
    {
        return $this->punto1->distancia($this->punto2);
    }

    // Metodo para mover
    public function mover(float $x, float $y): Linea
    {
        $this->punto1->mover($x, $y);
        $this->punto2->mover($x, $y);
        return $this;
    }

    public function __toString()
    {
        return "Punto 1: $this->punto1, Punto 2: $this->punto2";
    }
}
