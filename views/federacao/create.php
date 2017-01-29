<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Federacao */

$this->title = Yii::t('app', 'Create Federacao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Federacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="federacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
