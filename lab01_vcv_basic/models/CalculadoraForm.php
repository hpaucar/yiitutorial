<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * CalculadoraForm is the model behind the contact form.
 */
class CalculadoraForm extends Model
{
    public $nombre;
    public $numero1;
    public $numero2;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // nombre, numero1, numero2 are required
            [['nombre', 'numero1', 'numero2'], 'required'],            
        ];
    }

}
