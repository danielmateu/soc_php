<?php
class Libro
{
    // Propiedades
    public int $id = 0, $ediciones = 0, $edadRecomendada = 0;
    public string $isdn = "", $titulo = "", $editorial = "", $idioma = "", $autor = "";

    // Método para recuperar un array con todos los libros
    public static function get(): array
    {
        $consulta = "SELECT * FROM libros";
        return DB::selectAll($consulta, self::class);
    }

    // Método para recuperar un libro a partir de su id (NULL si no existe)
    public static function getLibro(int $id): ?Libro
    {
        $consulta = "SELECT * FROM libros WHERE id = $id";
        return DB::selectOne($consulta, self::class);
    }

    // Método para insertar un nuevo libro y devolver su id
    public function save()
    {
        $consulta = "INSERT INTO libros (isdn, titulo, editorial, idioma, autor, ediciones, edadRecomendada) VALUES (
            '$this->isdn',
            '$this->titulo',
            '$this->editorial',
            '$this->idioma',
            '$this->autor',
            $this->ediciones,
            $this->edadRecomendada
        )";
        // Guarda el nuevo libro en la base de datos y devuelve su id
        $this->id = DB::insert($consulta);

        // Devuelve el id del nuevo libro o false si no se ha podido insertar
        return $this->id;
    }

    // Método para actualizar un libro
    public function update()
    {
        $consulta = "UPDATE libros SET
            isdn = '$this->isdn',
            titulo = '$this->titulo',
            editorial = '$this->editorial',
            idioma = '$this->idioma',
            autor = '$this->autor',
            ediciones = $this->ediciones,
            edadRecomendada = $this->edadRecomendada
            WHERE id = $this->id
        ";
        // Devuelve el número de filas afectadas
        return DB::update($consulta);
    }

    // Método para borrar un libro
    public function delete()
    {
        $consulta = "DELETE FROM libros WHERE id = $this->id";
        // Devuelve el número de filas afectadas
        return DB::delete($consulta);
    }

    // Método para borrar un libro como objeto
    public  function deleteObject(): int
    {
        $consulta = "DELETE FROM libros WHERE id = $this->id";
        // Devuelve el número de filas afectadas
        return DB::delete($consulta);
    }

    // Método que realiza consultas totales
    public static function total(string $operacion = 'COUNT', string $campo = "*")
    {
        // $consulta = "SELECT $operacion($campo) FROM libros";
        // return DB::total($consulta);
        return DB::total('libros', $operacion, $campo);
    }


    // Método toString, lo usaremos principalmente en test
    public function __toString()
    {
        return "Libro: $this->titulo, de $this->autor";
    }
}
