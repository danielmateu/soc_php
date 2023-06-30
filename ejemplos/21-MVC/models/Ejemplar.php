<?php
class Ejemplar extends Model
{
    // Como la tabla no se llama ejemplar sino ejemplares
    protected static string $table = 'ejemplares';

    // Atributos
    protected int $id;
    protected string $estado;
    protected string $caracteristicas;
    protected float $precio;

    // Método toString
    public function __toString()
    {
        // Devolver el id del ejemplar, el estado, caracterísitcas y precio
        return "$this->id - $this->estado, $this->caracteristicas, $this->precio €";
    }
}
