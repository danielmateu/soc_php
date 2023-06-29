<?php
class Socio extends Model
{
    // Propiedades
    // public $id, $nombre, $apellidos, $direccion, $poblacion, $provincia, $dni, $fechaNacimiento, $telefono, $email, $cuota, $fechaAlta, $fechaBaja, $observaciones;

    // Constructor

    // Método para recuperar todos los préstamos de un socio

    public function getPrestamos(): array
    {
        $consulta = "SELECT * FROM prestamos WHERE idsocio=$this->id";

        return DB::selectAll($consulta, 'Prestamo');
    }

    // Método toString
    public function __toString()
    {
        return "$this->id - $this->nombre $this->apellidos";
    }
}
