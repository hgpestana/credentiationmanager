<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Militante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="militante-form">

    <?php $form = ActiveForm::begin([
      'id' => 'militante-active-form',
      'layout' => 'horizontal',
    ]); ?>

    <?= $form->field($model, 'numero')->textInput() ?>
    <?= $form->field($model, 'seccao')->textInput() ?>
    <?= $form->field($model, 'nome')->textInput() ?>
    <?= $form->field($model, 'sexo')->textInput() ?>
    <?= $form->field($model, 'morada')->textInput() ?>
    <?= $form->field($model, 'localidade')->textInput() ?>
    <?= $form->field($model, 'codigopostal')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'dataadesao')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'EEEE, dd/MM/yyyy', 'options'=> ['class'=>'form-control']]) ?>
    <?= $form->field($model, 'datanascimento')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'EEEE, dd/MM/yyyy', 'options'=> ['class'=>'form-control']]) ?>
    <?= $form->field($model, 'telefone')->textInput() ?>
    <?= $form->field($model, 'telemovel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
