<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Congresso */

$this->title = Yii::t('app', 'Create Congresso');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Congressos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congresso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
