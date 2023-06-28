<?php
class Libro extends Model
{

    // Propiedades
    // public $id, $isdn, $titulo, $editorial, $idioma, $autor, $ediciones, $edadRecomendada;

    // Constructor

    // Método toString
    public function __toString()
    {
        return "$this->id - $this->titulo, de $this->autor";
    }
}
