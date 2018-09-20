<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CursoForm extends Model
{
    public $nombre;
    public $descripcion;    

    public function rules()
    {
    	return [
            // are required
            [['nombre', 'descripcion'], 'required'],
        ];    	
    }
}



?>