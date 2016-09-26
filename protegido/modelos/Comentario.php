<?php
/**
 * Este modelo es la representación de la tabla tbl_comentarios
 *
 * Atributos del modelo
 * @property int $id_comentario
 * @property string $comentario
 * @property int $publicacion_id
 * @property int $padre_id
 * @property int $usuario_id
 * @property tinyint $estado
 * 
 * Relaciones del modelo
 * @property FkComentariosPublicacion $fkComentariosPublicacion
 * @property FkComentariosPadres $fkComentariosPadres
 * @property FkComentariosUsuarios $fkComentariosUsuarios
 */
class Comentario extends CModelo{
    private $respuestas = null;
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "comentarios";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_comentarios
     * @return array
     */
    public function atributos() {
        return [
        'id_comentario' => ['pk'] ,
        'comentario',
        'publicacion_id',
        'padre_id',
        'usuario_id',
        'estado' => ['def' => '1'] ,
        'fecha',
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
        'fkComentariosPublicacion' => [self::PERTENECE_A, 'FkComentariosPublicacion', 'publicacion_id'],
        'fkComentariosPadres' => [self::PERTENECE_A, 'FkComentariosPadres', 'padre_id'],
        'Autor' => [self::PERTENECE_A, 'Usuario', 'usuario_id'],
        ];
    }
    
    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
        'id_comentario' => 'Id Comentario', 
        'comentario' => 'Comentario', 
        'publicacion_id' => 'Publicacion Id', 
        'padre_id' => 'Padre Id', 
        'usuario_id' => 'Usuario Id', 
        'estado' => 'Estado', 
        ];
    }

    public function getRespuestas(){
        if($this->respuestas === null){
            $c = new CCriterio();
            $c->condicion("padre_id", $this->id_comentario);
            $this->respuestas = Comentario::modelo()->listar($c);
        }
        return $this->respuestas;
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return Comentario
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Comentario
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Comentario
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_comentarios
     * @param string $clase
     * @return Comentario
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}