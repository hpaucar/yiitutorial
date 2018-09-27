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