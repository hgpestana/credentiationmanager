<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Credenciacao */

$this->title = Yii::t('app', 'Create Credenciacao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Credenciacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credenciacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
