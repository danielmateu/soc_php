<?php
class Producto
{
    public $nombre, $precio, $cantidad, $imagen;

    public function __construct($nombre, $precio, $cantidad, $imagen)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->imagen = $imagen;
    }

    public function __toString()
    {
        return "Producto: $this->nombre, Precio: $this->precio, Cantidad: $this->cantidad, Imagen: $this->imagen";
    }
}
