<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Crear Curso';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
 <div class="col-lg-5">

     <?php $form = ActiveForm::begin(['id' => 'curso-form']); ?>
       <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>
       <?= $form->field($model, 'descripcion') ?>
             
       <div class="form-group">
          <?= Html::submitButton('Crear', ['class' => 'btn btn-primary', 'name' => 'curso-button']) ?>
       </div>
        <?php ActiveForm::end(); ?>
 </div>
</div>