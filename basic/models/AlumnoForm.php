<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class AlumnoForm extends Model
{
    public $nombre;
    public $apellidos;
    public $edad;
    public $curso_matriculado;    

    public function rules()
    {
    	return [
            // are required
            [['nombre', 'apellidos', 'edad', 'curso_matriculado'], 'required'],
        ];    	
    }
}



?>