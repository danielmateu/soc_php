<?php

/**
 * Clase Model
 * 
 * Clase base para todos los modelos. Implementa las operaciones 
 * genéricas del CRUD y el método __toString().
 * También dispone de métodos para recuperar las entidades relacionadas 1 a N
 * y automatiza las tareas del CRUD, permitiendo que los modelos estén vacíos
 *
 * @author: Robert Sallent
 * última revisión: 28/06/2023
 */

class Model
{

    /**
     * Retorna el nombre de la tabla, que será el nombre indicado en la propiedad
     * estática $table de la clase hija. En caso de no existir esta propiedad, 
     * será el nombre de la clase en lowercase con una s al final
     * Ejemplo: Libro --> libros
     * 
     * @return string nombre de la tabla correspondiente con el modelo actual.
     */
    protected static function getTable(): string
    {
        return get_called_class()::$table ?? strtolower(get_called_class()) . 's';
    }


    /**
     * Recupera todas las entidades y las retorna en un array.
     * 
     * @param int $limit límite de resultados (para paginación).
     * @param int $offset desplazamiento (para paginación).
     * 
     * @return array lista de todas las entidades
     */
    public static function all(
        int $limit = 0,
        int $offset = 0
    ): array {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        // prepara la consulta y la ejecuta
        $consulta = "SELECT * FROM $tabla ";
        $consulta .= $limit ? "LIMIT $limit OFFSET $offset" : "";

        return (DB_CLASS)::selectAll($consulta, get_called_class());
    }


    /**
     * Alias de all(). 
     * 
     * @deprecated en la versión 0.8.7. Se mantiene por compatibilidad con versiones anteriores.
     * 
     * @param int $limit límite de resultados (para paginación).
     * @param int $offset desplazamiento (para paginación).
     *
     * @return array lista de todas las entidades.
     */
    public static function get(
        int $limit = 0,
        int $offset = 0
    ): array {
        return get_called_class()::all($limit, $offset);
    }



    /**
     * Recupera una entidad concreta a partir de su identificador único.
     *  
     * @param int $id identificador único de la entidad a recuperar.
     * 
     * @return object|NULL un objeto del tipo entidad o NULL si no lo encuentra.
     */
    public static function find(int $id = 0): ?object
    {
        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "SELECT * FROM $tabla WHERE id=$id";
        return (DB_CLASS)::select($consulta, get_called_class());
    }



    /**
     * Alias de find().
     * 
     * @deprecated en la versión 0.8.7. Se mantiene por compatibilidad con versiones anteriores.
     * 
     * @param int $id identificador único de la entidad a recuperar.
     * 
     * @return object|NULL un objeto del tipo entidad o NULL si no lo encuentra.
     */
    public static function getById(int $id = 0): ?object
    {
        return get_called_class()::find($id);
    }

    /**
     * 
     * Recupera una entidad a partir de su identificador único o falla.
     * 
     * @param int $id identificador único de la entidad a recuperar.
     * 
     * @throws NotFoundException si no encuentra la entidad con ese identificador.
     * @return object la entidad recuperada.
     */
    public static function findOrFail(int $id = 0): object
    {
        $entity = get_called_class()::find($id);

        if (!$entity)
            throw new NotFoundException("No se encontró lo que buscas.");

        return $entity;
    }

    /**
     * Recupera entidades con un orden concreto.
     * 
     * @param string $orden orden deseado para los resultados.
     * @param string $sentido sentido ascendente o descendente.
     * @param int $limit límite de resultados para paginación.
     * @param int $offset desplazamiento para paginación.
     * 
     * @return array lista de entidades recuperadas.
     */
    public static function orderBy(
        string $orden = 'id',
        string $sentido = 'ASC',
        int $limit = 0,
        int $offset = 0
    ): array {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "SELECT *
                         FROM $tabla
                         ORDER BY $orden $sentido ";

        $consulta .= $limit ? "LIMIT $limit OFFSET $offset" : "";

        return (DB_CLASS)::selectAll($consulta, get_called_class());
    }



    /**
     * Recupera entidades a partir de un filtro.
     * 
     * @param string $campo campo para el filtro.
     * @param string $valor valor buscado.
     * @param string $orden orden de los resultados.
     * @param string $sentido sentido ascendente o descendente para el orden.
     * 
     * @return array lista de entidades con el filtro aplicado.
     */
    public static function getFiltered(
        string $campo = 'id',
        string $valor = '',
        string $orden = 'id',
        string $sentido = 'ASC'
    ): array {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "SELECT *
                       FROM $tabla
                       WHERE $campo LIKE '%$valor%'
                       ORDER BY $orden $sentido";

        return (DB_CLASS)::selectAll($consulta, get_called_class());
    }


    // recuperar objetos a partir de un objeto Filter
    // se combina con la paginación gracias a los parámetros limit y offset
    /**
     * Recupera entidades a partir de un objeto Filter. Se combina con la paginación
     * gracias a los parámetros limit y offset.
     * 
     * @param Filter $filtro filtro a aplicar.
     * @param int $limit número de resultados por página.
     * @param int $offset desplazamiento.
     * 
     * @return array lista de entidades con el filtro aplicado.
     */
    public static function filter(
        Filter $filtro,
        int $limit = RESULTS_PER_PAGE,
        int $offset = 0
    ): array {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "SELECT *
                           FROM $tabla
                           WHERE $filtro->field LIKE '%$filtro->text%'
                           ORDER BY $filtro->orderField $filtro->order 
                           LIMIT $limit 
                           OFFSET $offset ";

        return (DB_CLASS)::selectAll($consulta, get_called_class());
    }


    /**
     * Calcula el total de resultados a partir de un objeto filter.
     * 
     * @param Filter $filtro filtro a aplicar.
     * 
     * @return int total de resultados tras aplicar el filtro.
     */
    public static function filteredResults(Filter $filtro): int
    {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "SELECT COUNT(*) AS total
                           FROM $tabla
                           WHERE $filtro->field LIKE '%$filtro->text%'
                           ORDER BY $filtro->orderField $filtro->order ";

        return ((DB_CLASS)::select($consulta))->total;
    }


    /**
     * Recupera entidades a partir de múltiples condiciones de filtrado.
     * 
     * @param array $condiciones array asociativo campo => valor con las condiciones.
     * @param string $orden orden para los resultados.
     * @param string $sentido sentido ascendente o descendente.
     * 
     * @return array lista de entidades con los filtros aplicados.
     */
    public static function where(
        array $condiciones = [],
        string $orden = 'id',
        string $sentido = 'ASC'
    ): array {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "SELECT * FROM $tabla ";

        if (sizeof($condiciones)) {
            $consulta .= "WHERE ";

            foreach ($condiciones as $campo => $valor)
                $consulta .= " $campo LIKE '%$valor%' AND ";

            $consulta = substr($consulta, 0, strlen($consulta) - 4);
        }

        $consulta .= "ORDER BY $orden $sentido";

        return (DB_CLASS)::selectAll($consulta, get_called_class());
    }



    /**
     * Guarda una entidad en la base de datos.
     * 
     * @return int el autonumérico asignado en la base de datos o 0 si la tabla no dispone de autonumérico.
     */
    public function save(): int
    {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        // prepara la consulta de inserción (esta es más compleja)
        $consulta = "INSERT INTO $tabla (";

        // nombres de los campos
        foreach ($this as $propiedad => $valor)
            $consulta .= "$propiedad, ";

        $consulta = rtrim($consulta, ', '); // quita la última coma
        $consulta .= ") VALUES (";

        // valores
        foreach ($this as $valor)
            // pone comillas en el SQL solo para los string
            // también controla los valores nulos
            switch (gettype($valor)) {
                case "string":
                    $consulta .= "'$valor', ";
                    break;
                case "NULL":
                    $consulta .= "NULL, ";
                    break;
                case "array":
                    $consulta .= "'" . json_encode($valor) . "', ";
                    break;
                default:
                    $consulta .= "$valor, ";
            }

        $consulta = rtrim($consulta, ', '); // quita la última coma
        $consulta .= ")";

        $this->id = (DB_CLASS)::insert($consulta); // guarda el nuevo objeto

        // retorna el id del nuevo objeto
        return $this->id;
    }


    /**
     * Actualiza los datos de una entidad en la base de datos.
     * 
     * @return int el número de filas afectadas.
     */
    public function update(): int
    {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        // prepara la consulta
        $consulta = "UPDATE $tabla SET ";

        // pone comillas en el SQL solo para los string
        foreach ($this as $propiedad => $valor)
            switch (gettype($valor)) {
                case "string":
                    $consulta .= "$propiedad='$valor', ";
                    break;
                case "NULL":
                    $consulta .= "$propiedad=NULL, ";
                    break;
                case "array":
                    $consulta .= "$propiedad='" . json_encode($valor) . "', ";
                    break;
                default:
                    $consulta .= "$propiedad=$valor, ";
            }

        $consulta = rtrim($consulta, ', '); // quita la última coma
        $consulta .= " WHERE id=$this->id";

        // lanza la consulta y retorna el número de filas afectadas
        return (DB_CLASS)::update($consulta);
    }


    /**
     * Elimina una entidad de la base de datos a partir de su identificador único.
     * 
     * @param int $id el identificador único de la entidad.
     * @return int el número de filas afectadas.
     */
    public static function delete(int $id): int
    {

        $tabla = self::getTable(); // recupera el nombre de la tabla

        $consulta = "DELETE FROM $tabla WHERE id=$id";
        return (DB_CLASS)::delete($consulta);
    }


    /**
     * Elimina una entidad de la base de datos.
     * 
     * @return int el número de filas afectadas.
     */
    public function deleteObject(): int
    {
        return self::delete($this->id);
    }

    /**
     * Realiza consultas de totales.
     * 
     * @param string $operacion operación deseada.
     * @param string $campo campo sobre el que realizar la operación.
     * @return mixed el resultado 
     */
    public static function total(
        string $operacion = 'COUNT',
        string $campo = '*'
    ) {
        $tabla = self::getTable(); // recupera el nombre de la tabla

        return (DB_CLASS)::total($tabla, $operacion, $campo);
    }



    /**
     * Sanea las propiedades de tipo string de un modelo
     * 
     * @param bool $entities convertir entidades HTML.
     */
    public function saneate(bool $entities = true)
    {

        foreach ($this as $propiedad => $valor)
            if (gettype($valor) == 'string')
                $this->$propiedad = (DB_CLASS)::escape($valor, $entities);
    }


    /**
     * Quita espacios en blanco al inicio y final de las propiedades de tipo string.
     */
    public function trimStrings()
    {

        foreach ($this as $propiedad => $valor)
            if (gettype($valor) == 'string')
                $this->$propiedad = trim($this->valor);
    }



    // método que recupera objetos relacionados en relación 1 a N
    //

    /**
     * Recupera entidades relacionadas en relaciones 1 a N.
     * EJEMPLO: $propietario->hasMany(string $entidad, string $foranea, string $local):array
     *
     * por ejemplo para recuperar préstamos de un socio sería:
     * $socio->hasMany('Prestamo', 'idsocio', 'id');
     * 
     * Si la clave foranea respeta el nombre 'id' + entidad, no hace falta indicarla.
     * Si la clave local (primaria) se llama 'id', no hace falta indicarla.
     * el ejemplo anterior también funcionará como $socio->hasMany('Prestamo');
     * 
     * @param string $related tipo de entidad (clase) relacionada.
     * @param string $foreignKey clave foránea.
     * @param string $localKey clave local.
     * 
     * @return array lista de entidades relacionadas
     */
    public function hasMany(
        string $related,            // clase (entidad) relacionada
        string $foreignKey = null,  // clave foránea
        string $localKey = 'id'     // clave local
    ): array {

        $tabla = $related::$table ?? strtolower($related) . 's';   // cálculo del nombre de la tabla

        $foreignKey = $foreignKey ?? 'id' . strtolower(get_called_class());  // cálculo foranea

        $consulta = "SELECT * FROM $tabla WHERE $foreignKey = " . $this->$localKey; // consulta
        return (DB_CLASS)::selectAll($consulta, $related);
    }



    /**
     * Método que recupera objetos relacionados en relación 1 a N de forma inversa.
     * por ejemplo para recuperar el socio de un préstamo sería
     * $prestamo->belongsTo('Socio', 'idsocio', 'id');
     * 
     * Si la clave foranea respeta el nombre 'id' + entidad, no hace falta indicarla.
     * Si la clave del propietario se llama 'id', no hace falta indicarla.
     * 
     * El ejemplo anterior también funciona como $prestamo->belongsTo('Socio');
     * 
     * @param string $related tipo de entidad (clase) relacionada.
     * @param string $foreignKey nombre de la clave foránea
     * @param string $ownerKey nombre de la clave primaria en la tabla del lado 1.
     * 
     * @return object|NULL
     */
    public function belongsTo(
        string $related,
        string $foreignKey = null,
        string $ownerKey = 'id'
    ): ?object {

        $tabla = $related::$table ?? strtolower($related) . 's';   // cálculo del nombre de la tabla

        $foreignKey = $foreignKey ?? 'id' . strtolower($related);  // cálculo  foranea

        $consulta = "SELECT * FROM $tabla WHERE $ownerKey = " . $this->$foreignKey;
        return (DB_CLASS)::select($consulta, $related);
    }


    /**
     * Método __toString()
     * 
     * @return string
     */
    public function __toString(): string
    {

        $texto = '';

        foreach ($this as $propiedad => $valor) {
            $texto .= is_array($valor) ?
                "$propiedad: [ " . implode(', ', $valor) . " ]" :
                "$propiedad: <b>$valor</b>, ";
        }
        return rtrim($texto, ', '); // quita la última coma
    }
}
