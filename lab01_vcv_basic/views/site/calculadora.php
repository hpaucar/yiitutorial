<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\calculadoraForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Calculadora';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-calculadora">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Calculadora desarrollada por: Herminio
   </p>

    <div class="row">
        <div class="col-lg-5">
                <?php //echo CHtml::beginForm( Yii::app()->createUrl('site/CalculadoraCompleta'),'post'); ?>

                <?php $form = ActiveForm::begin(['id' => 'calculadora-form']); ?>

                    <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'numero1') ?>

                    <?= $form->field($model, 'numero2') ?>
                    
                    <div class="form-group">
                        <?= Html::submitButton('Sumar', ['class' => 'btn btn-primary', 'name' => 'boton-suma']) ?>
                        <?= Html::submitButton('Multiplicar', ['class' => 'btn btn-primary', 'name' => 'boton-multiplicar']) ?>
                        <?= Html::submitButton('Dividir', ['class' => 'btn btn-primary', 'name' => 'boton-dividir']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

   
</div>
