<?php
class Socio extends Model
{
    // Propiedades
    // public $id, $nombre, $apellidos, $direccion, $poblacion, $provincia, $dni, $fechaNacimiento, $telefono, $email, $cuota, $fechaAlta, $fechaBaja, $observaciones;

    // Constructor

    // Método toString
    public function __toString()
    {
        return "$this->id - $this->nombre $this->apellidos";
    }
}
