<?php

// require_once './Punto.php';

class Figura
{
    // Propiedades
    private $puntos;

    // Constructor
    public function __construct(Punto ...$puntos)
    {
        if ($puntos < 3) {
            throw new Exception("Se necesitan al menos 3 puntos");
        } else {
            $this->puntos = $puntos;
        }
    }

    // Métodos
    // Añadir puntos
    public function addPunto(Punto $punto): Figura
    {
        $this->puntos[] = $punto;
        return $this;
    }

    // Método mover()
    public function mover(float $x, float $y): Figura
    {
        foreach ($this->puntos as $punto) {
            $punto->mover($x, $y);
        }
        return $this;
    }


    // Método perimetro()
    public function perimetro(): float
    {
        $perimetro = 0;
        for ($i = 0; $i < count($this->puntos) - 1; $i++) {
            $perimetro += $this->puntos[$i]->distancia($this->puntos[$i + 1]);
        }
        $perimetro += $this->puntos[count($this->puntos) - 1]->distancia($this->puntos[0]);
        return $perimetro;
    }

    // Método __toString()
    public function __toString(): string
    {
        $str = '';
        foreach ($this->puntos as $punto) {
            $str .= $punto . '<br>';
        }
        return $str;
    }
}
