<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "Ubicacion".
 *
 */
class Ubicacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubicacion';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitud', 'longitud'], 'required'],            
            [['latitud'], 'string', 'max' => 50],
            [['longitud'], 'string', 'max' => 80],
            
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ubicacion' => 'Id Ubicacion',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',            
        ];
    }
}
?>