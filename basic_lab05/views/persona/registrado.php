<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'Registro de Ubicación';
?>

<div>
	<h1> Persona Registrada </h1>
    <h2>Nombre: <?=$persona->nombre ?></h2>
    <h2>Apellidos: <?=$persona->apellidos ?></h2>
    <h2>Latitud: <?=$ubicacion->latitud ?></h2>
    <h2>Longitud: <?=$ubicacion->longitud ?></h2>
    

</div>

<div>

<?php 

echo yii2mod\google\maps\markers\GoogleMaps::widget([
    'userLocations' => [
        [
            'location' => [
                'lat' => $ubicacion->latitud,
                'lng' => $ubicacion->longitud,
            ],
            'htmlContent' => '<h1>Universidad Autonoma</h1>',
        ],
        [
            'location' => [
                'city' => 'New York',
                'country' => 'United States',
            ],
            'htmlContent' => '<h1>New York</h1>',
        ],
    ],
]);




?>

</div>