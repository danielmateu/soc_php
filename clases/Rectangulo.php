<?php
// Implementa la clase Rectangulo, que realice una representación mediante un Punto y dos valores (ancho y alto).

// Debemos poder mover el rectángulo, llevarlo al origen, calcular su área, perímetro y diagonal.

// Realiza además las pruebas de todos los métodos y operaciones que implementes en un fichero de test aparte.

class Rectangulo
{
    // Atributos
    private $punto;
    private $ancho;
    private $alto;

    // Constructor
    public function __construct(Punto $punto, int $ancho = 1, int $alto = 1)
    {
        $this->punto = $punto;
        $this->ancho = $ancho;
        $this->alto = $alto;
    }


    // Método que nos permita mover el rectangulo
    public function mover(int $dx, int $dy)
    {
        return $this->punto->mover($dx, $dy);
    }

    // Método que nos permita llevar el rectangulo al origen
    public function volverOrigen()
    {
        $this->punto->origen();
    }

    // Método que nos permita calcular el area
    public function area(): float
    {
        return $this->ancho * $this->alto;
    }

    // Método que nos permita calcular el perimetro
    public function perimetro(): float
    {
        return $this->ancho * 2 + $this->alto * 2;
    }

    // Método que nos permita calcular la diagonal
    public function diagonal(): float
    {
        // return sqrt(pow($this->ancho, 2) + pow($this->alto, 2));
        return hypot($this->ancho, $this->alto);
    }

    // Método que nos permita mostrar el rectangulo
    public function __toString(): string
    {
        return "Rectangulo: " . $this->punto . ", ancho: $this->ancho, alto: $this->alto";
    }
}
