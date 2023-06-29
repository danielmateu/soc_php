<?php
class Ejemplar extends Model
{
    // Como la tabla no se llama ejemplar sino ejemplares
    protected static string $table = 'ejemplares';

    // Atributos
    // protected int $id;
    // protected string $estado;
    // protected string $caracteristicas;
    // protected float $precio;

    // Método para recuperar los préstamos de un determinado ejemplar
    public function getPrestamos(): array
    {
        $consulta = "SELECT * FROM prestamos WHERE idejemplar=$this->id";

        return DB::selectAll($consulta, 'Prestamo');
    }

    // Método toString
    public function __toString()
    {
        // Devolver el id del ejemplar, el estado, caracterísitcas y precio
        return "$this->id - $this->estado, $this->caracteristicas, $this->precio €";
    }
}
