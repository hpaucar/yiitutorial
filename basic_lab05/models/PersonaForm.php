<?php
namespace app\models;
use Yii;
use yii\base\Model;
/**
 * ContactForm is the model behind the contact form.
 */
class PersonaForm extends Model
{
    public $nombre;
    public $apellidos;
    public $latitud;
    public $longitud;

    public function rules()
    {
    	return [
            // are required
            [['nombre', 'apellidos', 'latitud', 'longitud'], 'required'],
        ];    	
    }
}
?>