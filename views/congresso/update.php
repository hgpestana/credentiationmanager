<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Congresso */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Congresso',
]) . $model->nome;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Congressos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="congresso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
