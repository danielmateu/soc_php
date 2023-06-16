<?php

class Rectangulo
{
    // Propiedades
    private $puntos;

    // Constructor
    public function __construct(Punto ...$puntos)
    {
        if ($puntos < 4) {
            throw new Exception("Se necesitan al menos 4 puntos");
        } else {
            $this->puntos = $puntos;
        }
    }

    public function setAncho(Punto $punto): Rectangulo
    {
        $this->puntos[0] = $punto;
        return $this;
    }

    // Métodos
    // Añadir puntos
    public function addPunto(Punto $punto): Rectangulo
    {
        $this->puntos[] = $punto;
        return $this;
    }

    // Método mover()
    public function mover(float $x = 0, float $y = 0): Rectangulo
    {
        foreach ($this->puntos as $punto) {
            $punto->mover($x, $y);
        }
        return $this;
    }

    public function volverOrigen(): Rectangulo
    {
        $this->puntos[0]->origen();
        return $this;
    }




    // ToString
    public function __toString(): string
    {
        $str = '';
        foreach ($this->puntos as $punto) {
            $str .= $punto . '<br>';
        }
        return $str;
    }
}
