<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MilitanteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="militante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'seccao') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'morada') ?>

    <?php // echo $form->field($model, 'localidade') ?>

    <?php // echo $form->field($model, 'codigopostal') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'dataadesao') ?>

    <?php // echo $form->field($model, 'datanascimento') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'telemovel') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
