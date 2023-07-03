<?php
class Libro extends Model
{
    // // Método que recupera los ejemplares de un libro
    // public function getEjemplares(): array
    // {
    //     $consulta = "SELECT * FROM ejemplares WHERE idlibro=$this->id";

    //     return DB::selectAll($consulta, 'Ejemplar');
    // }

    // // Método toString
    // public function __toString()
    // {
    //     return "$this->id - $this->titulo, de $this->autor";
    // }
}
