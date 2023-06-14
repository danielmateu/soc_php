<?php
class Punto
{
    public $x = 0, $y = 0;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Método que nos permita devolver el punto al origen
    public function origen()
    {
        $this->x = 0;
        $this->y = 0;
    }

    // Método que nos permita mover el punto
    public function mover($dx, $dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }

    // Método que devuelve la distancia entre dos puntos
    public function distancia($punto)
    {
        $dx = $this->x - $punto->x;
        $dy = $this->y - $punto->y;
        return sqrt($dx * $dx + $dy * $dy);
    }

    // Método que nos permita mostrar el punto
    public function mostrar()
    {
        echo "($this->x, $this->y)";
    }

    // Método que nos diga si dos puntos son iguales
    public function igual($punto)
    {
        return $this->x == $punto->x && $this->y == $punto->y;
    }

    // Método que nos diga si son el mismo punto
    public function esIgual($punto)
    {
        return $this === $punto;
    }

    // Método tostring
    public function __toString()
    {
        return "($this->x, $this->y)";
    }
}
