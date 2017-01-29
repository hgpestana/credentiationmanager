<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MesaVoto */

$this->title = Yii::t('app', 'Create Mesa Voto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mesa Votos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mesa-voto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
