<?php
class Socio
{
    // Propiedades
    public int $id = 0;
    public string | null $nombre = '', $apellidos = '', $dni = '', $nacimiento = '', $email = '', $direccion = '', $cp = '', $poblacion = '', $provincia = '', $telefono = '', $foto = '', $alta = '';

    // Método para recuperar un array con todos los socios
    public static function get(): array
    {
        $consulta = "SELECT * FROM socios";
        return DB::selectAll($consulta, self::class);
    }

    // Método para recuperar un socio a partir de su id (NULL si no existe)
    public static function getById(int $id): ?socio
    {
        $consulta = "SELECT * FROM socios WHERE id = $id";
        return DB::selectOne($consulta, self::class);
    }

    // Método para insertar un nuevo socio y devolver su id
    public function save()
    {
        $consulta = "INSERT INTO socios (
            nombre,
            apellidos,
            dni,
            nacimiento,
            email,
            direccion,
            cp,
            poblacion,
            provincia,
            telefono,
            foto,
            alta
        ) VALUES (
            '$this->nombre',
            '$this->apellidos',
            '$this->dni',
            '$this->nacimiento',
            '$this->email',
            '$this->direccion',
            '$this->cp',
            '$this->poblacion',
            '$this->provincia',
            '$this->telefono',
            '$this->foto',
            '$this->alta'
        )";
        // Guarda el nuevo socio en la base de datos y devuelve su id
        $this->id = DB::insert($consulta);

        // Devuelve el id del nuevo socio o false si no se ha podido insertar
        return $this->id;
    }

    // Método para actualizar un socio
    public function update()
    {
        $consulta = "UPDATE socios SET
            nombre = '$this->nombre',
            apellidos = '$this->apellidos',
            dni = '$this->dni',
            nacimiento = '$this->nacimiento',
            email = '$this->email',
            direccion = '$this->direccion',
            cp = '$this->cp',
            poblacion = '$this->poblacion',
            provincia = '$this->provincia',
            telefono = '$this->telefono',
            -- foto = '$this->foto',
            alta = '$this->alta'


            WHERE id = $this->id
        ";
        // Devuelve el número de filas afectadas
        return DB::update($consulta);
    }

    // Método para borrar un socio
    public static function delete(int $id): int
    {
        $consulta = "DELETE FROM socios WHERE id = $id";
        // Devuelve el número de filas afectadas
        return DB::delete($consulta);
    }

    // Método para borrar un socio como objeto
    public  function deleteObject(): int
    {
        $consulta = "DELETE FROM socios WHERE id = $this->id";
        // Devuelve el número de filas afectadas
        return DB::delete($consulta);
    }

    // Método que realiza consultas totales
    public static function total(string $operacion = 'COUNT', string $campo = "*")
    {
        // $consulta = "SELECT $operacion($campo) FROM socios";
        // return DB::total($consulta);
        return DB::total('socios', $operacion, $campo);
    }


    // Método toString, lo usaremos principalmente en test
    public function __toString()
    {
        return "$this->id - <strong>$this->nombre $this->apellidos</strong>, $this->dni, $this->email, $this->poblacion,  TLF: $this->telefono";
        // return "$this->id - $this->nombre, $this->apellidos";
    }
}
