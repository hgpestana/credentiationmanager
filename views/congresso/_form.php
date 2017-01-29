<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Congresso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congresso-form">

    <?php $form = ActiveForm::begin([
        'id' => 'congresso-active-form',
        'layout' => 'horizontal',
    ]); ?>

    <?= $form->field($model, 'nome')->textInput() ?>
    <?= $form->field($model, 'data')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'EEEE, dd/MM/yyyy', 'options'=> ['class'=>'form-control']]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
