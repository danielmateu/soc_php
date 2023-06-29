<?php
class Libro extends Model
{
    // Método que recupera los ejemplares de un libro
    public function getEjemplares(): array
    {
        $consulta = "SELECT * FROM ejemplares WHERE idlibro=$this->id";

        return DB::selectAll($consulta, 'Ejemplar');
    }

    // Método que recupera todos los temas de un libro
    public function getTemas(): array
    {
        $consulta = "SELECT t.* FROM temas t INNER JOIN temas_libros tl ON t.id=tl.idtema WHERE tl.idlibro=$this->id";

        return DB::selectAll($consulta, 'Tema');
    }

    // Método toString
    public function __toString()
    {
        return "$this->id - $this->titulo, de $this->autor";
    }
}
