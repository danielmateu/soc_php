<?php
class Punto
{

    // Atributos
    public $x = 0, $y = 0;

    // Constructor
    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Método estático que nos permita obtener la distancia entre dos puntos
    public static function distanciaEntreDosPuntos(Punto $punto1, Punto $punto2): float
    {
        // $dx = $punto1->x - $punto2->x;
        // $dy = $punto1->y - $punto2->y;
        // return sqrt($dx * $dx + $dy * $dy);

        // Otra forma de hacerlo:
        return sqrt(pow($punto1->x - $punto2->x, 2) + pow($punto1->y - $punto2->y, 2));
    }

    // Método de objeto que devuelve la distancia entre dos puntos
    public function distancia($punto): float
    {
        // $dx = $this->x - $punto->x;
        // $dy = $this->y - $punto->y;
        // return sqrt($dx * $dx + $dy * $dy);

        // Otra forma de hacerlo:
        return sqrt(pow($this->x - $punto->x, 2) + pow($this->y - $punto->y, 2));
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
