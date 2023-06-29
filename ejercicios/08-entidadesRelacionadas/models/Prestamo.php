<?php
class Prestamo extends Model
{
    // Atributos
    protected int $id;
    protected int $idsocio;
    protected int $idejemplar;
    protected string $fechaPrestamo;
    protected string $fechaDevolucion;
    protected string $observaciones;

    // // método partir de un prestamo recuperar un ejemplar
    // public function getEjemplar(): Ejemplar
    // {
    //     $consulta = "SELECT * FROM ejemplares WHERE id=$this->idejemplar";

    //     return DB::select($consulta, 'Ejemplar');
    // }

    // // método partir de un prestamo recuperar un socio
    // public function getSocio(): Socio
    // {
    //     $consulta = "SELECT * FROM socios WHERE id=$this->idsocio";

    //     return DB::select($consulta, 'Socio');
    // }

    // Método toString
    public function __toString()
    {
        return "$this->id - $this->fechaPrestamo, $this->fechaDevolucion, $this->observaciones";
    }
}
