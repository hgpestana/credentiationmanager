<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Seccao */

$this->title = Yii::t('app', 'Create Seccao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seccaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seccao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
