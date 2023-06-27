<?php
class Libro
{
    // Propiedades
    public $id, $isdn, $titulo, $editorial, $idioma, $autor, $ediciones, $edadRecomendada;

    // Constructor

    // Método toString
    public function __toString()
    {
        return "Libro: $this->titulo, de $this->autor";
    }
}
