<?php
/**
 * Este modelo es la representación de la tabla tbl_torneos
 *
 * Atributos del modelo
 * @property int $id_torneo
 * @property int $cupo_maximo
 * @property int $cupo_minimo
 * @property int $edad_maxima
 * @property int $edad_minima
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $nombre
 * @property string $observaciones
 * @property string $tabla_posiciones
 * @property string $descripcion
 * 
 * Relaciones del modelo
 */
 class Torneo extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "torneos";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_torneos
     * @return array
     */
    public function atributos() {
        return [
		'id_torneo' => ['pk'] , 
		'cupo_maximo', 
		'cupo_minimo', 
		'edad_maxima', 
		'edad_minima', 
		'fecha_inicio', 
		'fecha_fin', 
		'nombre', 
		'observaciones', 
		'tabla_posiciones', 
		'descripcion', 
        ];
    }
    
    /**
     * Esta función retorna las relaciones con otros modelos
     * @return array
     */
    protected function relaciones() {        
        return [
            # el formato es simple: 
            # tipo de relación | modelo con que se relaciona | campo clave foranea
                    ];
    }
    
    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
		'id_torneo' => 'Id Torneo', 
		'cupo_maximo' => 'Cupo Maximo', 
		'cupo_minimo' => 'Cupo Minimo', 
		'edad_maxima' => 'Edad Maxima', 
		'edad_minima' => 'Edad Minima', 
		'fecha_inicio' => 'Fecha Inicio', 
		'fecha_fin' => 'Fecha Fin', 
		'nombre' => 'Nombre', 
		'observaciones' => 'Observaciones', 
		'tabla_posiciones' => 'Tabla Posiciones', 
		'descripcion' => 'Descripcion', 
        ];
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return Torneo
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Torneo
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Torneo
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_torneos
     * @param string $clase
     * @return Torneo
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}
