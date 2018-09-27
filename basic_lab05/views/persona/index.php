<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'Registro de Ubicación';
?>

<div>
	<h1> Ingrese la Información de Persona </h1>

        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'registrar-form']); ?>
             <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>
             <?= $form->field($model, 'apellidos') ?>
             <?= $form->field($model, 'latitud') ?>
             <?= $form->field($model, 'longitud') ?>
             
             <div class="form-group">
              <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'registrar-button']) ?>
             </div>

                <?php ActiveForm::end(); ?>

            </div>
</div>