<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Creado Exito';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
	<h1>Datos del Curso</h1>
	<h2>Nombre : <?= $curso->nombre ?> </h2>
	<h2>Descripción : <?= $curso->descripcion ?> </h2>
</div>