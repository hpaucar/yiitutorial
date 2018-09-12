<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ResultadoForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Resultado';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-Resultado">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Resultado de la operación es:
   </p>

   	<h2>Número 1: <?= $n1 ?> </h2>
    <h2>Número 2: <?= $n2 ?> </h2>
   	<h2>Resultado: <?= $resultado ?> </h2>
   	
</div>
