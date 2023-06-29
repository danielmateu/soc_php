<?php
class Tema extends Model
{

    // Atributos
    protected int $id;
    // Método para recuperar todos los libros de un determinado tema
    public function getLibros(): array
    {
        $consulta = "SELECT l.* FROM libros l INNER JOIN temas_libros tl ON l.id=tl.idlibro WHERE tl.idtema=$this->id";

        return DB::selectAll($consulta, 'Libro');
    }
}
