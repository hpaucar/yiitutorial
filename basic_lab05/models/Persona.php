<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "persona".
 *
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persona';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'direccion_lat_lon'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['apellidos'], 'string', 'max' => 80],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_persona' => 'Id Persona',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'direccion_lat_lon' => 'Dirección Latitud Longitud',            
        ];
    }
}
?>