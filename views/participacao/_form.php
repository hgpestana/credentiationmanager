<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Participacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'congresso')->textInput() ?>

    <?= $form->field($model, 'mesavoto')->textInput() ?>

    <?= $form->field($model, 'militante')->textInput() ?>

    <?= $form->field($model, 'papel')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
