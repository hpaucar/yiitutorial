<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property int $id_alumno
 * @property string $nombre
 * @property string $apellidos
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'edad'], 'required'],
            [['edad'], 'integer'],
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
            'edad' => 'Edad',
            'curso_matriculado' => 'Curso Matriculado',
        ];
    }
}

?>