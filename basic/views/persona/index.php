<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'My Primer Controlador Index de Persona';

?>

<div>
	<h1> Hello World </h1>

        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'registrar-form']); ?>
             <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>
             <?= $form->field($model, 'apellidos') ?>
             <?= $form->field($model, 'edad') ?>
             <div class="form-group">
              <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'registrar-button']) ?>
             </div>

                <?php ActiveForm::end(); ?>

            </div>
</div>

